        <footer class="clearfix">
        </footer>
    </div><!-- End of wrapper -->
    <script src="js/libs/jquery-1.8.3.min.js"></script>
    <script>
        if (typeof jQuery == 'undefined') {
            var e = document.createElement('script');
            e.src = "js/libs/jquery-1.8.3.min.js";
            e.type='text/javascript';
            document.getElementsByTagName("head")[0].appendChild(e);
        }
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/application.js"></script>
        <script>(function() {
    var nav = document.getElementById('nav'),
        anchor = nav.getElementsByTagName('a'),
        arr = window.location.pathname.split('/');
        current = window.location.pathname.split('/')[arr.length-1];
        for (var i = 0; i < anchor.length; i++) {
            var pathLenght = anchor[i].href.split('/');
        if(anchor[i].href.split('/')[pathLenght.length-1] == current) {
            anchor[i].className = "active";
        }
    }
})();
 </script>
</body>
</html>