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
                for ($kawinthara=1;$kawinthara<=4;$kawinthara++)
                {
                    echo ($wiw);
                    echo (10-$wiw);
                }
            echo "<br/>";
            }
        ?>
    </pre>
</body>