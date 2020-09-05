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
                echo ("*");
                echo (($wiw*2)-1);
                echo ("*");
                echo ($wiw*2) ; 
                echo "<br/>";
            }
        ?>
    </pre>
</body>