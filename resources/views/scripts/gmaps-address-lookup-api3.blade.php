<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
<script type="text/javascript">
    //FUNCTION TO ASSIST WITH AUTO ADDRESS INPUT USING GOOGLE MAPS API3
    //<![CDATA[
    window.onload=function(){
        if(document.getElementById("location"))
        {
            var input = document.getElementById('location');
            var options; // = {componentRestrictions: {country: 'us'}};
            var autocomplete = new google.maps.places.Autocomplete(input, options);
        }
     }//]]>
</script>
