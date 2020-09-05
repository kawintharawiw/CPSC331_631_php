<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp tlwgtypewriter.ttf');

        }
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:20px;">
        <?php echo "<br/>";
            for ($wiw=1;$wiw<=3;$wiw++)
            {
                for ($kawinthara=3;$kawinthara>=$wiw;$kawinthara--)
                {
                    echo (" ");
                }
                echo ("*");
                for ($kawinthara=1;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo ($wiw);
                }
                for ($kawinthara=2;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo ($wiw);
                }
                echo ("*");
                
            echo "<br/>";
            }
            for ($wiw=1;$wiw<=2;$wiw++)
            {
                for ($kawinthara=1;$kawinthara<=$wiw+1;$kawinthara++)
                {
                    echo (" ");
                }
                echo ("*");
                for ($kawinthara=$wiw;$kawinthara<=2;$kawinthara++)
                {
                    echo (3-$wiw);
                }
                for ($kawinthara=$wiw;$kawinthara<=1;$kawinthara++)
                {
                    echo (3-$wiw);
                }
                echo ("*");
            echo "<br/>";
            }
        ?>
    </pre>
</body>