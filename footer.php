<script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
<script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
<script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
<script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
<script src="assets/js/lib/mmc-common.js"></script>
<script src="assets/js/lib/mmc-chat.js"></script>
<!--  Chart js -->
<script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="assets/js/lib/chart-js/chartjs-init.js"></script>
<!-- // Chart js -->

<!--  Datamap -->
<script src="assets/js/lib/datamap/d3.min.js"></script>
<script src="assets/js/lib/datamap/topojson.js"></script>
<script src="assets/js/lib/datamap/datamaps.world.min.js"></script>
<script src="assets/js/lib/datamap/datamap-init.js"></script>
<!-- // Datamap -->-->
<script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
<script src="assets/js/lib/weather/weather-init.js"></script>
<script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
<script src="assets/js/scripts.js"></script><!-- scripit init-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBj4nzCYq3CLHbr0RanO59GFw5xDeZ_bc4&sensor=false&libraries=places"></script>
<script src="assets/js/locationpicker.js"></script>
<script src="assets/js/dynamicInput.js"></script>


<script>




        $('#googleMap').locationpicker({
            location: {
                latitude: 24.871326,
                longitude: 67.079781
            },
            radius: 0,
            inputBinding: {
                latitudeInput: $('#us3-lat'),
                longitudeInput: $('#us3-lon'),
                radiusInput: $('#us3-radius'),
                locationNameInput: $('#us3-address')
            },
            enableAutocomplete: true,
            onchanged: function (currentLocation, radius, isMarkerDropped) {
                // Uncomment line below to show alert on each Location Changed event
                //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
            }
        });

</script>

</body>


<!-- Mirrored from zebratheme.com/html/fooadmin/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2019 13:26:32 GMT -->
</html>

