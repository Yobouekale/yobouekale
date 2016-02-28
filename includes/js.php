

        <!--*** START PERSONNAL WEBSITE .JS CODE ***-->
        <script src="js/main.js"
        <!--*** END PERSONNAL WEBSITE .JS CODE ***-->




        <script src="admin/resources/template/animate/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>

        <!-- THIS CODE IS USED TO HIDE ALL IMAGES THAT WHERE NOT FOUND (CREATED BY TECHNODREAM DevTeam) -->
        <script>
            $(document).ready(function(){
                $("img").error(function () {
                    //$(this).hide();
                    $(this).css({visibility:"hidden"});
                });
            });
        </script>

        <script>
            var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
            var lineChartData = {
                labels : ["January","February","March","April","May","June","July"],
                datasets : [
                    {
                        label: "Vulnérabilités trouvées",
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(192, 57, 43, 1)",
                        pointColor: "rgba(192, 57, 43, 1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                    },
                    {
                        label: "Vulnérabilités Résolues",
                        fillColor: "rgba(151,187,205,0.2)",
                        strokeColor: "rgba(46, 204, 113, 1)",
                        pointColor: "rgba(46, 204, 113, 1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                    }
                ]

            }

            window.onload = function(){
                var ctx = document.getElementById("canvas").getContext("2d");
                window.myLine = new Chart(ctx).Line(lineChartData, {
                    responsive: true
                });
            }


        </script>



        <!--*** START THIRD PARTIES JS'S ***-->

