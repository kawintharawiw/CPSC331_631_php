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
            for ($wiw=1;$wiw<=5;$wiw++)
            {
                echo ("*");
                for ($kawinthara=2;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo (" ");
                }
                for ($kawinthara=$wiw;$kawinthara<=5;$kawinthara++)
                {
                    echo ($wiw);
                }
                for ($kawinthara=$wiw;$kawinthara<=4;$kawinthara++)
                {
                    echo ($wiw);
                }
                for ($kawinthara=2;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo (" ");
                }
            echo ("*");
            echo "<br/>";
            }
        ?>
    </pre>
</body>