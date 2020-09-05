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
                for ($kawinthara=$wiw;$kawinthara<=5;$kawinthara++)
                {
                    echo ($wiw);
                }
                for ($kawinthara=1;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo ("*");
                }
            echo "<br/>";
            }
        ?>
    </pre>
</body>