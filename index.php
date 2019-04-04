<?php
include 'server1.php';
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Chart</title>
    <link rel="stylesheet" href="css/style.css">  
		<script type="text/javascript" src="http://cdn.zingchart.com/zingchart.min.js"></script>
		<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
		<script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
		ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>
	</head>
	<body style="background-color: silver">
		<h1 style="text-align: center;color: blue;margin-top: 50px"><b><u>Garbage Monitoring</u></b></h1>
		<div id='myChart'></div>
	<script>
		var myConfig = {
  graphset:[
    {
      //First garbage status
      type:"bar",
      x: "20%",
     	y: 0,
     	height: "100%",
     	width: "20%",
     	title:{
     	  text: "Garbage 1",
     	  y: "80%",
     	  fontColor:"red",
     	  bold: false
     	},
   	  subtitle:{
     	  text: "%",
     	  y: "76%",
     	  fontSize: 15,
     	  bold: false
     	},
     	scaleY:{
     	  lineColor: "none",
     	  values: "0:100:10",
     	  guide:{
     	    visible: false
     	  },
     	  tick:{
     	    margin: 3,
          lineWidth: 4,
          size: 15,
          lineColor: "red",
          placement: "outter",
          rules:[
            {
              rule: "%i % 2 == 1",
              lineWidth: 2
            }
          ]
        },
        minorTicks: 4,
        minorTick: {
          lineColor: "red",
          placement: "inner",
          size: 7
        },
        item:{
          fontSize: 16,
          rules:[
            {
              rule: "%i % 2 == 1",
              visible: false
            }
          ]
        }
     	},
     	"scale-y-2":{
     	  values: "0:100:10",
     	  lineColor: "none",
     	  item:{
     	    visible: false
     	  },
     	  guide:{
     	    visible: false
     	  },
     	  tick:{
     	    placement: "inner",
     	    size: 40,
     	    padding: 0,
     	    margin: 0,
     	    offsetX: 50,
     	    lineColor: "#fff",
     	    rules:[
     	      {
     	        rule: "%i == 0 || %i == 10",
     	        visible: false
     	      }
     	    ]
     	  }
     	},
     	plot:{
     	  barsOverlap: "100%",
     	  borderRadius: 2,
     	  hoverState: {
     	    visible: false
     	  },
     	  tooltip:{
    		  visible: false
    		}
     	},
     	plotarea:{
     	  marginBottom: "30%",
     	  marginTop: "10%",
     	  _marginRight: "35%"
     	},
     	scaleX:{
     	  visible: false
     	},
      series:[
        {
          values: [100],
          backgroundColor: "#fff",
          borderWidth: 4,
          borderColor: "#C1C1C1",
          maxTrackers: 0,
          barWidth: "100%",
          tooltip:{
            visble: false
          }
        },
        {
          values: [<?php echo $garbage1; ?>],
          backgroundColor: "red",
          barWidth: "93%",
          maxTrackers: 0,
          tooltip:{
            visble: false
          },
          valueBox:{
            text: "%v",
    			  placement: "bottom-out",
    			  offsetY: 0,
    			  fontSize: 28,
    			  fontColor: "#515151",
          }
        }
      ]
    },
    //Second Garbage Bar
    {
      type:"bar",
      x: "40%",
      y: 0,
      height: "100%",
      width: "20%",
      title:{
        text: "Garbage 2",
        y: "80%",
        fontColor:"red",
        bold: false
      },
      subtitle:{
        text: "%",
        y: "76%",
        fontSize: 15,
        bold: false
      },
      scaleY:{
        lineColor: "none",
        values: "0:100:10",
        guide:{
          visible: false
        },
        tick:{
          margin: 3,
          lineWidth: 4,
          size: 15,
          lineColor: "red",
          placement: "outter",
          rules:[
            {
              rule: "%i % 2 == 1",
              lineWidth: 2
            }
          ]
        },
        minorTicks: 4,
        minorTick: {
          lineColor: "red",
          placement: "inner",
          size: 7
        },
        item:{
          fontSize: 16,
          rules:[
            {
              rule: "%i % 2 == 1",
              visible: false
            }
          ]
        }
      },
      "scale-y-2":{
        values: "0:100:10",
        lineColor: "none",
        item:{
          visible: false
        },
        guide:{
          visible: false
        },
        tick:{
          placement: "inner",
          size: 40,
          padding: 0,
          margin: 0,
          offsetX: 50,
          lineColor: "#fff",
          rules:[
            {
              rule: "%i == 0 || %i == 10",
              visible: false
            }
          ]
        }
      },
      plot:{
        barsOverlap: "100%",
        borderRadius: 2,
        hoverState: {
          visible: false
        },
        tooltip:{
          visible: false
        }
      },
      plotarea:{
        marginBottom: "30%",
        marginTop: "10%",
        _marginRight: "35%"
      },
      scaleX:{
        visible: false
      },
      series:[
        {
          values: [100],
          backgroundColor: "#fff",
          borderWidth: 4,
          borderColor: "#C1C1C1",
          maxTrackers: 0,
          barWidth: "100%",
          tooltip:{
            visble: false
          }
        },
        {
          values: [<?php echo $garbage2; ?>],
          backgroundColor: "red",
          barWidth: "93%",
          maxTrackers: 0,
          tooltip:{
            visble: false
          },
          valueBox:{
            text: "%v",
            placement: "bottom-out",
            offsetY: 0,
            fontSize: 28,
            fontColor: "#515151",
          }
        }
      ]
    },
    // Third Garbage Bar 
    {
      type:"bar",
      x: "60%",
      y: 0,
      height: "100%",
      width: "20%",
      title:{
        text: "Garbage 3",
        y: "80%",
        fontColor:"red",
        bold: false
      },
      subtitle:{
        text: "%",
        y: "76%",
        fontSize: 15,
        bold: false
      },
      scaleY:{
        lineColor: "none",
        values: "0:100:10",
        guide:{
          visible: false
        },
        tick:{
          margin: 3,
          lineWidth: 4,
          size: 15,
          lineColor: "red",
          placement: "outter",
          rules:[
            {
              rule: "%i % 2 == 1",
              lineWidth: 2
            }
          ]
        },
        minorTicks: 4,
        minorTick: {
          lineColor: "red",
          placement: "inner",
          size: 7
        },
        item:{
          fontSize: 16,
          rules:[
            {
              rule: "%i % 2 == 1",
              visible: false
            }
          ]
        }
      },
      "scale-y-2":{
        values: "0:100:10",
        lineColor: "none",
        item:{
          visible: false
        },
        guide:{
          visible: false
        },
        tick:{
          placement: "inner",
          size: 40,
          padding: 0,
          margin: 0,
          offsetX: 50,
          lineColor: "#fff",
          rules:[
            {
              rule: "%i == 0 || %i == 10",
              visible: false
            }
          ]
        }
      },
      plot:{
        barsOverlap: "100%",
        borderRadius: 2,
        hoverState: {
          visible: false
        },
        tooltip:{
          visible: false
        }
      },
      plotarea:{
        marginBottom: "30%",
        marginTop: "10%",
        _marginRight: "35%"
      },
      scaleX:{
        visible: false
      },
      series:[
        {
          values: [100],
          backgroundColor: "#fff",
          borderWidth: 4,
          borderColor: "#C1C1C1",
          maxTrackers: 0,
          barWidth: "100%",
          tooltip:{
            visble: false
          }
        },
        {
          values: [<?php echo $garbage3; ?>],
          backgroundColor: "red",
          barWidth: "93%",
          maxTrackers: 0,
          tooltip:{
            visble: false
          },
          valueBox:{
            text: "%v",
            placement: "bottom-out",
            offsetY: 0,
            fontSize: 28,
            fontColor: "#515151",
          }
        }
      ]
    }
  ]
};

zingchart.render({ 
	id : 'myChart', 
	data : myConfig, 
});
</script>
</body>
</html>
