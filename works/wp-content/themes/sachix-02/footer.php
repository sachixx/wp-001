    <footer>
        <div class="contents">
        <p>&copy; 2018 <?php bloginfo('name') ?></p>
        </div>
    </footer>
<?php wp_footer(); ?>
    <!-- jquery & iScroll -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <script type="text/javascript" src="/js/slick.js"></script>
    <script>
    $(document).ready(function() {
        $('.drawer').drawer();
    });
    </script>
       <script>
        $('.slider-box').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows:false
                    }
                }
            ]
        });
        </script>
    <script>
$(function(){
    var idcount = 1;
    var toc = '';
    var currentlevel = 0;
    $("main h2,main h3,main h4",this).each(function(){
        this.id = "chapter-" + idcount;
        idcount++;
        var level = 0;
        if(this.nodeName.toLowerCase() == "h2") {
            level = 1;
        } else if(this.nodeName.toLowerCase() == "h3") {
            level = 2;
        } else if(this.nodeName.toLowerCase() == "h4") {
            level = 3;
        }
        while(currentlevel < level) {
            toc += '<ol class="chapter">';
            currentlevel++;
        }
        while(currentlevel > level) {
            toc += "</ol>";
            currentlevel--;
        }
        toc += '<li><a href="#' + this.id + '">' + $(this).html() + "</a></li>\n";
    });
    while(currentlevel > 0) {
        toc += "</ol>";
        currentlevel--;
    }
    if($("main h2")[0]) {
    $("#toc").html(toc);
   // $('h2:not("#chapter-1")').before(' <div class="back-toc"><a href="#toc">もくじに戻る↑</a></div>'); 
    } 
else{
    $('#toc').attr('class', 'no-toc');
    }
});
</script>
</body>
</html>