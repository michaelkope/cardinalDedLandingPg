

<form action="engine/clientProcessor.php<?php echo '?zal=' . htmlspecialchars($_GET["zal"]) . '&utm_campaign=' . htmlspecialchars($_GET["utm_campaign"]); ?>" method="post" name="referralForm" onSubmit="MM_validateForm('First name','','R','Last name','','R','Email address','','RisEmail','Primary phone','','RisNum');return document.MM_returnValue">
                    <br>
                    <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']; ?>">	
					<input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']; ?>">	
					<input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']; ?>">	
					<input type="hidden" name="zal" value="<?php echo $_GET['zal']; ?>">	
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">	
                   
                    
                    <fieldset>
                    	<label>First Name</label>
	                    <input name="firstname" type="text" value="" id="firstname" size="25" maxlength="50" />
                    </fieldset>
                    
                    <fieldset>
                    	<label>Last Name</label>
                        <input name="lastname" type="text" value="" id="lastname" size="25" maxlength="50" />
                    </fieldset>
                    
                    <fieldset>
                    	<label>Email Address</label>
                        <input name="email" type="text" value="" id="email" size="25" maxlength="50" />
                    </fieldset>
                    
                    <fieldset>
                    	<label>Primary Phone Number
						<br>(numbers only, no dashes)</label>
                    	<input name="phone" type="text" value="" id="phone" size="25" maxlength="50" />
					</fieldset>
                    
                    <fieldset>
                    	<label>Home State</label>
                    	<select name="Home state" id="Home state" title="Home state" >
                            <option value=""></option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Washington">Washington</option>
                            <option value="West Virginia">West Virginia</option>
                            <option value="Wisconsin">Wisconsin</option>
                            <option value="Wyoming">Wyoming</option>
                      </select>
					</fieldset>
                    
                    <fieldset>
                    	<label>Driving job you're interested in:</label>
                        <select name="interest" id="interest" title="interest">
                            <option value=""></option>
                            <option value="Company Driver">Company Driver</option>
                            <option value="Owner Operator">Owner Operator</option>
                            <option value="Lease Purchase">Lease Purchase</option>                                    
                        </select>
                    </fieldset>	
    
                    <fieldset>
                        <label>Date of birth: (mm/dd/yyyy)</label>
                        <select name="Birthday month" id="Birthday month" title="Birthday month">
                            <option value="zz">Month</option>
                            <option value="01">Jan</option>
                            <option value="02">Feb</option>
                            <option value="03">Mar</option>
                            <option value="04">Apr</option>
                            <option value="05">May</option>
                            <option value="06">Jun</option>
                            <option value="07">Jul</option>
                            <option value="08">Aug</option>
                            <option value="09">Sep</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>                            
                        </select>                      	
                    </fieldset>
                    
                    <fieldset>
                        <select name="Birthday day" id="Birthday day" title="Birthday day">
                            <option value="zz">Day</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </fieldset>  
                                  
                    <fieldset>
                            <input name="Birthday year" type="text" id="Birthday year" value="" size="4" placeholder="Year">
                    </fieldset>
                    
                    <br>
                    <fieldset>
                        <label>Do you have a current CDL?</label>
                        <label class="checkbox inline">
                            <input type="checkbox" name="cdl" value="Yes" id="RadioGroup1_0"> Yes
                        </label>
                        <label class="checkbox inline">
                            <input type="checkbox" name="cdl" value="No" id="RadioGroup1_1"> No
                        </label>
                    </fieldset>  
                               
                <br>
				<!-- start visible-phone -->
         		<span class="visible-phone">
                    <button class="btn btn-warning" input name="Submit" type="submit" value="Submit" onClick="_gaq.push(['_trackPageview', '/jobs/activity/shortform_phn']);MM_validateForm('First name','','R','Last name','','R','Email address','','RisEmail','Primary phone','','R','Birthday year','','R');return document.MM_returnValue">Submit</button>
				</span>
				<!-- end visible-phone -->
				<!-- start visible-tablet -->
         		<span class="visible-tablet">
                    <button class="btn btn-warning" input name="Submit" type="submit" value="Submit" onClick="_gaq.push(['_trackPageview', '/jobs/activity/shortform_tab']);MM_validateForm('First name','','R','Last name','','R','Email address','','RisEmail','Primary phone','','R','Birthday year','','R');return document.MM_returnValue">Submit</button>
				</span>
				<!-- end visible-tablet -->
				<!-- start visible-desktop -->
         		<span class="visible-desktop">
                    <button class="btn btn-warning" input name="Submit" type="submit" value="Submit" onClick="_gaq.push(['_trackPageview', '/jobs/activity/shortform_dsk']);MM_validateForm('First name','','R','Last name','','R','Email address','','RisEmail','Primary phone','','R','Birthday year','','R');return document.MM_returnValue">Submit</button>
				</span>
				<!-- end visible-desktop -->								
    		</form>            