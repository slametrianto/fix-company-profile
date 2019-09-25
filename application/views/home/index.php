<!-- slider -->

<div class="slider" id="home">
    <ul class="slides">
        <li>
            <img src="<?php echo base_url('img/web1.jpg'); ?>"> <!-- random image -->
            <div class="caption center-align black-text">
                <h3>
                    <font color="white" size="4">
                        <script language="JavaScript">
                            var text = "Payung Anak Bangsa For IT Solution";
                            var delay = 20;
                            var currentChar = 1;
                            var destination = "[none]";

                            function type() {
                                //if (document.all)
                                {
                                    var dest = document.getElementById(destination);
                                    if (dest) // && dest.innerHTML)
                                    {
                                        dest.innerHTML = text.substr(0, currentChar) + "<blink>_</blink>";
                                        currentChar++;
                                        if (currentChar > text.length) {
                                            currentChar = 1;
                                            setTimeout("type()", 80000);
                                        } else {
                                            setTimeout("type()", delay);
                                        }
                                    }
                                }
                            }

                            function startTyping(textParam, delayParam, destinationParam) {
                                text = textParam;
                                delay = delayParam;
                                currentChar = 1;
                                destination = destinationParam;
                                type();
                            }
                        </script> <b>
                            <div 0px="" 12px="" arial="" color:="" ff0000="" font:="" id="textDestination" margin:="" style="background-color: none;"></div>
                        </b>
                        <script language="JavaScript">
                            javascript: startTyping(text, 50, "textDestination");
                        </script>

                        We Build Integrated Software Development Solution
                    </font>
                </h3>

            </div>
        </li>
        <li>
            <img src="<?php echo base_url('img/2.jpg'); ?>"> <!-- random image -->
            <div class="caption left-align black-text">
                <h3>
                    <font color="white" size="4">We Support Network ,Enterprise Infrastructure and DevOps</font>
                </h3>

            </div>
        </li>
        <li>
            <img src="<?php echo base_url('img/3.jpg'); ?>"> <!-- random image -->
            <div class="caption right-align black-text">
                <h3>
                    <font color="white" size="4">We Give You IT Consultant Professional</font>
                </h3>

            </div>
        </li>
    </ul>
</div>