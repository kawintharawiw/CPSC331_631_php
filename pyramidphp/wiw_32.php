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
                for ($kawinthara=7;$kawinthara>=$wiw;$kawinthara--)
                {
                    echo (8-$kawinthara);
                }
                for ($kawinthara=1;$kawinthara<=$wiw+2;$kawinthara++)
                {
                    echo ("*");
                }
                echo ($wiw+2) ;  
            echo "<br/>";
            }
        ?>
    </pre>
</body>