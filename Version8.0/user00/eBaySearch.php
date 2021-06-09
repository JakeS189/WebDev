<?php

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
error_reporting(E_ALL);  // Turn on all errors, warnings and notices for easier debugging

// API request variables
$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
$version = '1.0.0';  // API version supported by your application
$appid = 'RobertMa-Shakopee-PRD-169ec6b8e-bb30ba02';  // Replace with your own AppID
$globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = true;
    $query = trim($_POST["query"]);
} else {
    $input = false;
    $query = '';  //
}

if ($input == true) {
    $safequery = urlencode($query);  // Make the query URL-friendly
    $i = '0';  // Initialize the item filter index to 0
    // Create a PHP array of the item filters you want to use in your request
    $filterarray =
        array(
            array(
                'name' => 'MaxPrice',
                'value' => '25',
                'paramName' => 'Currency',
                'paramValue' => 'USD'
            ),
            array(
                'name' => '',
                'value' => 'true',
                'paramName' => '',
                'paramValue' => ''
            ),
            array(
                'name' => 'ListingType',
                'value' => array('AuctionWithBIN', 'FixedPrice'),
                'paramName' => '',
                'paramValue' => ''
            ),
        );

    // Generates an indexed URL snippet from the array of item filters
    function buildURLArray($filterarray)
    {
        global $urlfilter;
        global $i;
        // Iterate through each filter in the array
        foreach ($filterarray as $itemfilter) {
            // Iterate through each key in the filter
            foreach ($itemfilter as $key => $value) {
                if (is_array($value)) {
                    foreach ($value as $j => $content) { // Index the key for each value
                        $urlfilter .= "&itemFilter($i).$key($j)=$content";
                    }
                } else {
                    if ($value != "") {
                        $urlfilter .= "&itemFilter($i).$key=$value";
                    }
                }
            }
            $i++;
        }
        return "$urlfilter";
    } // End of buildURLArray function

    // Build the indexed item filter URL snippet
    buildURLArray($filterarray);


    // Construct the findItemsByKeywords HTTP GET call
    $apicall = "$endpoint?";
    $apicall .= "OPERATION-NAME=findItemsByKeywords";
    $apicall .= "&SERVICE-VERSION=$version";
    $apicall .= "&SECURITY-APPNAME=$appid";
    $apicall .= "&GLOBAL-ID=$globalid";
    $apicall .= "&keywords=$safequery";
    $apicall .= "&paginationInput.entriesPerPage=50";
    $apicall .= "$urlfilter";
    // Load the call and capture the document returned by eBay API
    $resp = simplexml_load_file($apicall);

    // Check to see if the request was successful, else print an error
    if ($resp->ack == "Success") {
        $results = '';
        // If the response was loaded, parse it and build links
        $i = 0;
        foreach ($resp->searchResult->item as $item) {
            $pic   = $item->galleryURL;
            $link  = $item->viewItemURL;
            $title = $item->title;
            $price = $item->currentPrice;
            $location = $item->location;
            $i = $i + 1;
            /////////////////////////EDIT THIS LINE/////////////////////////////////////////////////////
            // For each SearchResultItem node, build a link and append it to $results
            if ($i % 4 === 1) {
                $results .= "$price<div class='row'><div class='col'><span>$price</span><img src=\"$pic\"><a href=\"$link\">$title</a></div>";
            }
            if ($i % 4 === 2 || $i % 4 === 3) {
                $results .= "<div class='col'><img src=\"$pic\"><a href=\"$link\">$title</a></div>";
            }
            if ($i % 4 === 0) {
                $results .= "<div class='col'><img src=\"$pic\"><a href=\"$link\">$title</a></div></div>";
            }
            ////////////////////////EDIT THIS LINE//////////////////////////////////////////////////////      
        }
    }
}
if ($input == false) {
    $results = "Find an item";
}
// If the response does not indicate 'Success,' print an error
else {
    $results  = "<h3>Oops! The request was not successful. Make sure you are using a valid ";
    $results .= "AppID for the Production environment.</h3>";
}
?>
<!-- Build the HTML page with values from the call response -->
<html>

<head>
    <title>eBay Search Results for <?php echo $query; ?></title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            font-family: arial, sans-serif;
        }

        .query {
            color: red;
            font-weight: bolder;
        }

        table {
            border: 1px black
        }
    </style>
</head>

<body>

    <h1>eBay Search Results for <span class="query"><?php echo $query; ?></span></h1>
    <form action="ebaySearch.php" method="post">
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <label>Search For an Item on eBay</label>
            <input type="text" name="query" class="form-control" value="<?php echo $query; ?>">
            <span class="help-block"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
    </form>
    <div class="container-fluid">
        <?php echo $results; ?>
    </div>


</body>

</html>