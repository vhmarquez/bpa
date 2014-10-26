<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <meta name="description" content="The Environment &amp; You is a website designed to inform users of enviromental issues. We provide users with different ways in which they can help out around their houses or their communities." />
    
    <meta name="keywords" content="global, global warming, climate change, waste disposal, energy, saving energy, water comsumption, water, environment, climate, trash, toxic, toxic waste, environmental conservation, earth, save the earth, planet, save the planet, save our planet, fossil fuels, trees, planting trees, plants" />
    
    <title>THE ENVIRONMENT &amp; YOU |  Global Warming, Save the Environment</title>
    
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    
    <!-- 
    
        Author: Victor Marquez, Shaun Milosevich, and Craig Velez
        
        Date: 11/14/2007
        
    -->

</head>

<body>

    <div align="center">
    
    	<!-- Banner -->
    
        <div id="banner"></div>
        
        <!-- End of Banner -->
        
        <!-- Navigation -->
        
        <div id="nav">
        
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="environment.html">Our Environment</a></li>
                <li><a href="help.html">How can I help?</a></li>
                <li><a href="vid_art.html">Videos / Articles</a></li>
                <li><a href="faq.html">FAQ'S</a></li>
                <li><a href="contact_us.html">Contact Us</a></li>
            </ul>
        
        </div>
        
        <!-- End of Navigation -->
        
        <!-- Content -->
        
        <div id="content">
            
            <div id="content_container">
            
                <table style="width: 800px;">
                    <tr valign="top">
                        <td style="width: 200px;" id="right" valign="top">
                        
                            <!-- Right Side Links -->
                        
                            <h1>Useful Links</h1>
                        
                            <ul>
                                <li class="normal" onmouseover="this.className = 'over'" onmouseout="this.className = 'normal'"><a href="http://www.worldviewofglobalwarming.org/">World View of Global Warming</a></li>
                                <li class="normal" onmouseover="this.className = 'over'" onmouseout="this.className = 'normal'"><a href="http://www.cnn.com/SPECIALS/2007/planet.in.peril/">CNN's Planet in Peril</a></li>
                                <li class="normal" onmouseover="this.className = 'over'" onmouseout="this.className = 'normal'"><a href="http://www.climateprotect.org/">The Alliance for Climate Protection</a></li>
                                <li class="normal" onmouseover="this.className = 'over'" onmouseout="this.className = 'normal'"><a href="http://www.liveearth.org/">Live Earth</a></li>
                                <li class="normal" onmouseover="this.className = 'over'" onmouseout="this.className = 'normal'"><a href="http://www.earthlab.com/">Earthlab</a></li>
                                <li class="normal" onmouseover="this.className = 'over'" onmouseout="this.className = 'normal'"><a href="http://www.earthlab.com/signupprofile/ecp.htm">ECP Carbon &amp; Lifestyle Calculator</a></li>
                            </ul>
                            
                            <h1>Environmental Blogs</h1>
                            
                            <ul>
                                <li class="normal" onmouseover="this.className = 'over'" onmouseout="this.className = 'normal'"><a href="http://www.ecogeek.org/">Eco Geek</a></li>
                                <li class="normal" onmouseover="this.className = 'over'" onmouseout="this.className = 'normal'"><a href="http://www.treehugger.com/">Tree Hugger</a></li>
                                <li class="normal" onmouseover="this.className = 'over'" onmouseout="this.className = 'normal'"><a href="http://www.autobloggreen.com/">Auto Blog Green</a></li>
                                <li class="normal" onmouseover="this.className = 'over'" onmouseout="this.className = 'normal'"><a href="http://www.inhabitat.com/">Inhabitat</a></li>
                                <li class="normal" onmouseover="this.className = 'over'" onmouseout="this.className = 'normal'"><a href="http://greenoptions.com/">Green Options</a></li>
                                <li class="normal" onmouseover="this.className = 'over'" onmouseout="this.className = 'normal'"><a href="http://noimpactman.typepad.com/">No Impact Man</a></li>
                                <li class="normal" onmouseover="this.className = 'over'" onmouseout="this.className = 'normal'"><a href="http://www.got2begreen.com/">Got 2 be Green</a></li>
                                <li class="normal" onmouseover="this.className = 'over'" onmouseout="this.className = 'normal'"><a href="http://lighterfootstep.com/">Lighter Foot Steps</a></li>
                            </ul>
                            
                            <!-- End of Right Side Links -->
                        
                        </td>
                        <td style="width: 600px; padding: 0px 20px 0px 0px;">
                        
                            <h1>Contact Us</h1>
            
                            <p>
                        
							<?php 
                            if(isset($_POST['submit'])) { 
                            $to = "victormarquez1990@yahoo.com"; 
                            $subject = "The Environment and You"; 
                            $subject2 = $_POST['subject2'];
                            $firstname_field = $_POST['firstname']; 
                            $lastname_field = $_POST['lastname']; 
                            $email_field = $_POST['email']; 
                            $message = $_POST['message']; 
                              
                            $body = "First Name: $firstname_field\n \n Last Name: $lastname_field\n  \n E-Mail: $email_field\n \n Subject: $subject2_field\n \n Message:\n $message"; 
                              
                            echo "Your email has been sent, please wait about 1 or 2 days before sending another message"; 
                            mail($to, $subject, $body); 
                            } else { 
                            echo "Sorry for the inconvenience, but this feature is temporarily down."; 
                            } 
                            ?> 
                            
                            </p>                     
                
                        </td>
                        
                    </tr>
                 </table>
                 
            </div>
            
        </div>
        
        <!-- End of Content -->
        
        <!-- Roots -->
        
        <div id="roots">
        
        
        
        </div>
        
        <!-- End of Roots -->
        
        <!-- Footer -->
        
        <div id="footer">
        
            <ul>
            
                <li style="background-image: url(images/icons/css_valid.gif); background-position: left; background-repeat: no-repeat; padding: 2px 0px 0px 25px; "><a href="http://jigsaw.w3.org/css-validator/">CSS Compliant</a></li>
                <li style="background-image: url(images/icons/xhtml_valid.gif); background-position: left; background-repeat: no-repeat; padding: 2px 0px 0px 25px; clear: both; "><a href="http://validator.w3.org/check?uri=referer">XHTML Compliant</a></li>
                <li>&copy; Shaun Milosevich, Craig Velez, Victor Marquez</li>
            
            </ul>
        
        </div>
        
        <!-- End of Footer -->
    
    </div>

</body>
</html>