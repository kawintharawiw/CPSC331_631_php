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
            for ($wiw=1;$wiw<=7;$wiw++)
            {
                for ($kawinthara=1;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo (" ");
                }
                for ($kawinthara=0;$kawinthara<3;$kawinthara++)
                {
                    echo ($kawinthara+$wiw);
                }
                for ($kawinthara=0;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo ("*");
                }
            echo "<br/>";
            }
        ?>
    </pre>
</body>