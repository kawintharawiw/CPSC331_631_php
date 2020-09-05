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
                for ($kawinthara=7;$kawinthara>=$wiw;$kawinthara--)
                {
                    echo (" ");
                }
                for ($kawinthara=1;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo ($kawinthara);
                }
                echo ($wiw);
                for ($kawinthara=$wiw;$kawinthara>=1;$kawinthara--)
                {
                    echo ($kawinthara);
                }
            echo "<br/>";
            }
        ?>
    </pre>
</body>