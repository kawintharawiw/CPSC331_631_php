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
               echo ($wiw);
                for ($kawinthara=$wiw;$kawinthara<=9;$kawinthara++)
                {
                    echo ("*");
                }
                for ($kawinthara=2;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo (" ");
                }
                echo (6-$wiw);
            echo "<br/>";
            }
        ?>
    </pre>
</body>