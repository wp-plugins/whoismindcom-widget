<script type="text/javascript">
    jQuery(document).ready(function() {
            jQuery("#whois_btn").click(function() {
                    param = jQuery("#whois_val").val();
                    if(!param){
                        alert("Ooops! The textbox is empty.");
                    }else{
                        url = 'http://www.whoismind.com/go?src=whoismind-wordpress&w='+encodeURIComponent(param);
                        window.location = url;
                    }
            });
    });
</script>
