<!DOCTYPE html>
<html>
<script>
   var d = new Date();
   var yr = d.getFullYear();
   var mo = d.getMonth()+1;
   if(mo<10) mo='0'+mo;
   var da = d.getDate();
   if(da<10) da='0'+da;
   <?php 
   $now = yr+mo+da;
   ?>
</script>
<?php 
	$con = mysqli_connect("localhost","lee","1234","smr","3306");
	$result = mysqli_query($con,"select * from reservation where Room_ID='1' where='$now'");
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>으어어어어어</title>
    <link rel="stylesheet" href="styles/kendo.common.min.css" />
    <link rel="stylesheet" href="styles/kendo.default.min.css" />
    <link rel="stylesheet" href="styles/kendo.default.mobile.min.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/kendo.all.min.js"></script>
</head>
<body>
<div id="example">
    <div class="demo-section k-content wide">
        <div id="chart"></div>
    </div>
    <div class="box wide">
        <div class="box-col">
            <h4>Labels Configuration</h4>
            <ul class="options">
                <li>
                    <input id="labels" checked="checked" type="checkbox" autocomplete="off" />
                    <label for="labels">Show labels</label>
                </li>
                <li>
                    <input id="alignCircle" name="alignType" type="radio"
                           value="circle" checked="checked" autocomplete="off" />
                    <label for="alignCircle">Aligned in circle</label>
                </li>
                <li>
                    <input id="alignColumn" name="alignType" type="radio"
                           value="column" autocomplete="off" />
                    <label for="alignColumn">Aligned in columns</label>
                </li>
            </ul>
        </div>
    </div>
    <script>
    	function ccc(c){
			if(c!=10){
				return {
                    category: "c['Time]",
                    value: 10
                },;
            return {
                category: "None",
                value: 10
            };
    	}
    </script>
    <script>
        function createChart() {
            $("#chart").kendoChart({
                title: {
                    text: "예약현황"
                },
                legend: {
                   position: "top"
                },
                seriesDefaults: {
                    labels: {
                        template: "#= category # - #= kendo.format('{0:P}', percentage)#",
                        position: "outsideEnd",
                        visible: true,
                        background: "transparent"
                    }
                },
                series: [{
                    type: "donut",
                    data: [{
                        category: "가",
                        value: 10
                    }, {
                        category: "나",
                        value: 10
                    }, {
                        category: "다",
                        value: 10
                    }, {
                        category: "라",
                        value: 10
                    }, {
                        category: "마",
                        value: 10
                    }, {
                        category: "사",
                        value: 10
                    }, {
                        category: "아",
                        value: 10
                    }, {
                        category: "자",
                        value: 10
                    }, {
                        category: "차",
                        value: 10
                    }, {
                        category: "카",
                        value: 10
                    }]
                }],
                tooltip: {
                    visible: true,
                    template: "#= category # - #= kendo.format('{0:P}', percentage) #"
                }
            });
        }

        $(document).ready(function() {
            createChart();
            $(document).bind("kendo:skinChange", createChart);
            $(".box").bind("change", refresh);
        });

        function refresh() {
            var chart = $("#chart").data("kendoChart"),
                pieSeries = chart.options.series[0],
                labels = $("#labels").prop("checked"),
                alignInputs = $("input[name='alignType']"),
                alignLabels = alignInputs.filter(":checked").val();

            chart.options.transitions = false;
            pieSeries.labels.visible = labels;
            pieSeries.labels.align = alignLabels;

            alignInputs.attr("disabled", !labels);

            chart.refresh();
        }
    </script>
</div>
</body>
</html>