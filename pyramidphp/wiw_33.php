<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp_tlwgtypewriter.ttf');

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
                for ($kawinthara=1;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo ("*");
                }
                for ($kawinthara=2;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo ("*");
                }
                
            echo "<br/>";
            }
            for ($wiw=1;$wiw<=2;$wiw++)
            {
                for ($kawinthara=1;$kawinthara<=$wiw+1;$kawinthara++)
                {
                    echo (" ");
                }
                for ($kawinthara=$wiw;$kawinthara<=2;$kawinthara++)
                {
                    echo ("*");
                }
                for ($kawinthara=$wiw;$kawinthara<=1;$kawinthara++)
                {
                    echo ("*");
                }
            echo "<br/>";
            }
        ?>
    </pre>
</body>