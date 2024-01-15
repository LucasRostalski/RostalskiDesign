<footer class="site-footer d-flex justify-content-center align-items-center">
    <div class="footer_info p-3">
        
 Copyright &copy; 2018 – <?php echo date('Y'); ?> RostalskiDesign.pl
    </div>
</footer>
<script>

        const cursor = document.querySelector('.cursor');

        document.addEventListener('mousemove', e => {
            cursor.setAttribute("style", "top: "+(e.pageY - 10)+"px; left: "+(e.pageX - 10)+"px;")
        })

        document.addEventListener('click', () => {
            cursor.classList.add("expand");

            setTimeout(() => {
                cursor.classList.remove("expand");
            }, 500)
        })
    </script>

<script>
    
$(document).ready(function() {
    $(".fancybox").fancybox({
        type: 'iframe',
        beforeLoad: function() {
            var caption = this.element.attr('data-caption');
            this.tpl.wrap = '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div><p>'+caption+'</p></div></div></div>'
                
        },
        
        helpers:  {
            title : {
                type : 'inside',
                position: 'top'
            }
        }
    });
});
</script>

<?php wp_footer(); ?>
</body>
</html>