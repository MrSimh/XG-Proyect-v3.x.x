<br />
<div id="content">
        {Have_new_message}
		
		    <table class="cadre table-overview">
                <thead>

                </thead>
                <tbody>
                    <tr class="cadre-row">
                        <td class="planet-overview" rowspan='6'><img src="{dpath}planets/{planet_image}.jpg" height="200" width="200"></td>
                         <td colspan="2" class="title-overview centrer">
                            <a href="game.php?page=renameplanet" title="{Planet_menu}">{planet_name}</a>
                        </td>
                    </tr>
                    <tr class="cadre-row">
                        <td class="title-overview">{ov_temperature}</td>
                        <td class="row-infos-overview">{ov_aprox} {planet_temp_min}{ov_temp_unit} {ov_to} {planet_temp_max}{ov_temp_unit}</td>
                    </tr>
                    <tr class="cadre-row">
                         <td class="title-overview">{ov_diameter}</td>
                        <td class="row-infos-overview">{planet_diameter} {ov_distance_unit} (<a title="{Developed_fields}">{planet_field_current}</a> / <a title="{max_eveloped_fields}">{planet_field_max}</a> {ov_fields})</td>
                    </tr>
                     <tr class="cadre-row">
                         <td class="title-overview"> {ov_position}</td>
                         <td class="row-infos-overview"><a href="game.php?page=galaxy&mode=0&galaxy={galaxy_galaxy}&system={galaxy_system}">[{galaxy_galaxy}:{galaxy_system}:{galaxy_planet}]</td>
                      
                    </tr>
                    <tr>
                          <td class='title-overview' colspan='3'>{ov_events}</td>
                    </tr>
                     <tr class="cadre-row">
                        <td class="timer-overview" colspan='3'>{building}</td>
                    </tr>
                     <tr class="cadre-row">
                         <td colspan='5'>{fleet_list}</td>
                    </tr>
                </tbody>
            </table>    

