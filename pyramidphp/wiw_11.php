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
                for ($kawinthara=5;$kawinthara>=$wiw;$kawinthara--)
                {
                    echo (" ");
                }	
                echo ($wiw);
                for ($kawinthara=2;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo (" ");
                }
            echo ($wiw);
            echo "<br/>";
            }
        ?>
    </pre>
</body>