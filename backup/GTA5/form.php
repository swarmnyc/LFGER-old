<form name="save" role="form" action="index.php" method="post" data-persist="persist" data-parsley-validate
      class="form-horizontal" style="height: 630px;">

    <h2>Find Someone to Play With</h2>

    <div class="gamertagForm">
        <div id="gamertagButton"><h4>1. Who are you?</h4></div>
        <input name="gamertag" type="text" maxlength="16" placeholder="Gamertag"
               required class="formControl">

        <div class="levelSubForm">

            <input type="text" name="level" id="levelInput" placeholder="What level are you?"/>

        </div>
    </div>

    <div class="regionForm"><select id="regionForm" name="region" value="" required class="formControl">
            <option value="">Select region</option>
            <option value="North America"> North America</option>
            <!-- <option value="South America"> South America</option> -->
            <option value="Europe"> Europe</option>
            <!--  <option value="Asia"> Asia</option> -->
            <option value="Australia"> Australia/Oceania</option>

        </select>

        <div id="regionSelector">
            <div id="regionButton"><h4>2. Where are you from?</h4></div>
            <div class="regionChoices">North America</div>
            <div class="regionChoices">Europe</div>
            <div class="regionChoices">Australia</div>
            <!--	<div class="regionChoices">South America</div>
                <div class="regionChoices">Asia</div>
                <div class="regionChoices">Africa</div>  -->
        </div>

    </div>



    <div class="platformForm"><select name="platform" id="platformForm" value="" required class="formControl">
            <option value="">Select platform</option>
            <option value="XBOX 360"> Xbox 360</option>
            <option value="XBOX One"> Xbox One</option>
            <option value="PS3"> Playstation 3</option>
            <option value="PS4"> Playstation 4</option>
            <option value="PC"> PC</option>

        </select>

        <div id="platformSelector">
            <div id="platformButton"><h4>3. What system?</h4></div>
            <div class="platformChoices">XBOX 360</div>
            <div class="platformChoices">XBOX One</div>
            <div class="platformChoices">PS3</div>
            <div class="platformChoices">PS4</div>
            <div class="platformChoices">PC</div>
        </div>

    </div>


    <div id="eventForm">

        <select name="event" class="form-control input-sm" id="searchActivity">
            <!-- #start select.options.searchActivity -->
            <option value="%">Job (ALL)</option>
            <optgroup label="Heist Challenges">
                <option value="Heist - All In Order Challenge">Heist - All In Order Challenge</option>
                <option value="Heist - Loyalty Challenge">Heist - Loyalty Challenge</option>
                <option value="Heist - Criminal Mastermind Challenge">Heist - Criminal Mastermind Challenge</option>
            </optgroup>
            <optgroup label="Heist Normal">
                <option value="Heist - The Fleeca Job">Heist - The Fleeca Job</option>
                <option value="Heist - The Prison Break">Heist - The Prison Break</option>
                <option value="Heist - The Humane Labs Raid">Heist - The Humane Labs Raid</option>
                <option value="Heist - Series A Funding">Heist - Series A Funding</option>
                <option value="Heist - The Pacific Standard Job">Heist - The Pacific Standard Job</option>
            </optgroup>
            <optgroup label="Heist Elite">
                <option value="Heist (Elite)  - The Fleeca Job">Heist (Elite) - The Fleeca Job</option>
                <option value="Heist (Elite)  - The Prison Break">Heist (Elite) - The Prison Break</option>
                <option value="Heist (Elite)  - The Humane Labs Raid">Heist (Elite) - The Humane Labs Raid</option>
                <option value="Heist (Elite)  - Series A Funding">Heist (Elite) - Series A Funding</option>
                <option value="Heist (Elite)  - The Pacific Standard Job">Heist (Elite) - The Pacific Standard Job</option>
            </optgroup>
            <option value="Free Mode">Free Mode</option>
            <optgroup label="Race">
                <option value="Land Race">Land Race</option>
                <option value="Air Race">Air Race</option>
                <option value="Bike Race">Bike Race</option>
                <option value="Sea Race">Sea Race</option>
            </optgroup>
            <option value="Deathmatch">Deathmatch</option>
            <option value="Capture">Capture</option>
            <option value="Last Team Standing">Last Team Standing</option>
            <option value="Mission">Mission</option>
            <option value="Versus Job">Versus Job</option>
            <option value="Adversary Mode">Adversary Mode</option>
            <option value="Survival">Survival</option>
            <option value="Parachuting">Parachuting</option>
            <option value="Playlist">Playlist</option>
            <!-- #end select.options.searchActivity -->
        </select>


    </div>



    <div class="notesForm"><input type="text" name="notes" maxlength="71" id="notesInput"
                                  placeholder="Notes (eg: 'looking for one more', '#hardmode', 'level 22 warlock', etc."
                                  data-allow-tags class="formControl">

    </div>



    <input type="submit" data-loading-text="Saving..." class="submitForm">


</form>