<?php
if ( class_exists( 'ms_Main' ) ) {
    $color_one = ms_Main::$settings['ms_color_one'];
    $color_two = ms_Main::$settings['ms_color_two'];
    $color_three = ms_Main::$settings['ms_color_three'];
} else {
    $color_one =  $_COOKIE['ms_color_one'];
    $color_two = $_COOKIE['ms_color_two'];
    $color_three = $_COOKIE['ms_color_three'];
}
?>

<style>
@import 'https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap';
 #widgetMatchResults .flex-table.row .flex-row:not(.first).colorOne {
    background: #00008B;
    color: white;
}
#widgetMatchResults .flex-table.row:hover .flex-row:not(.first).colorOne {
    background: #00008B;
    color: white;
    transition: 500ms;
}
#widgetMatchResults .flex-table.row .flex-row:not(.first).colorTwo {
    background: #0000FF;
    color: white;
}
#widgetMatchResults .flex-table.row:hover .flex-row:not(.first).colorTwo {
    background: #0000FF;
    color: white;
    transition: 500ms;
}
#widgetMatchResults .flex-table.row .flex-row:not(.first).colorThree {
    background: #1E90FF;
    color: white;
}
#widgetMatchResults .flex-table.row:hover .flex-row:not(.first).colorThree {
    background: #1E90FF;
    color: white;
    transition: 500ms;
}
#widgetMatchResults .flex-table.row .flex-row:not(.first).colorFour {
    background: #00BFFF;
    color: white;
}
#widgetMatchResults .flex-table.row:hover .flex-row:not(.first).colorFour {
    background: #00BFFF;
    color: white;
    transition: 500ms;
}
#widgetMatchResults .flex-table.row .flex-row:not(.first).colorFive {
    background: #ADD8E6;
    color: white;
}
#widgetMatchResults .flex-table.row:hover .flex-row:not(.first).colorFive {
    background: #ADD8E6;
    color: white;
    transition: 500ms;
}
#widgetMatchResults .flex-table.row .flex-row:not(.first).colorSix {
    background: #8B0000;
    color: white;
}
#widgetMatchResults .flex-table.row:hover .flex-row:not(.first).colorSix {
    background: #8B0000;
    color: white;
    transition: 500ms;
}
#widgetMatchResults .flex-table.row .flex-row:not(.first).colorSeven {
    background: #FF0000;
    color: white;
}
#widgetMatchResults .flex-table.row:hover .flex-row:not(.first).colorSeven {
    background: #FF0000;
    color: white;
    transition: 500ms;
}
#widgetMatchResults .flex-table.row .flex-row:not(.first).colorEight {
    background: #CD5C5C;
    color: white;
}
#widgetMatchResults .flex-table.row:hover .flex-row:not(.first).colorEight {
    background: #CD5C5C;
    color: white;
    transition: 500ms;
}
#widgetMatchResults .flex-table.row .flex-row:not(.first).colorNine {
    background: #E9967A;
    color: white;
}
#widgetMatchResults .flex-table.row:hover .flex-row:not(.first).colorNine {
    background: #E9967A;
    color: white;
    transition: 500ms;
}
#widgetMatchResults .flex-table.row .flex-row:not(.first).colorTen {
    background: #cc0000;
    color: white;
}
#widgetMatchResults .flex-table.row:hover .flex-row:not(.first).colorTen {
    background: #cc0000;
    color: white;
    transition: 500ms;
}
#widgetMatchResults {
    font-size: 13px;
    font-family: open sans;
}
#widgetMatchResults .matchIsLive {
    color: #ED2939;
    font-weight: bold;
}
#widgetMatchResults .noHalfEvent {
    text-align: center;
}
.nav-tab-active {
    color: <?php echo $color_one; ?>!important;
    background-color: <?php echo $color_two; ?>!important;
    border: 1px solid <?php echo $color_two; ?>!important;
}
.nav-tab {
    border: 1px solid black;
    padding: 1rem;
    margin-top: 2rem;
}
.tab-content {
    display: none;
}
.tab-content.active {
    display: block;
}
.nav-tab-wrapper {
    padding-top: 0.25rem;
    margin-bottom: 0px;
    border-top: 2px solid <?php echo $color_two; ?>;
}
/* Absolute Center Spinner */

.loading {
    position: fixed;
    z-index: 999;
    height: 2em;
    width: 2em;
    overflow: visible;
    margin: auto;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
}
/* Transparent Overlay */

.loading:before {
    content: '';
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.loading:not(:required) {
    /* hide "loading..." text */
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
}
.loading:not(:required):after {
    content: '';
    display: block;
    font-size: 10px;
    width: 1em;
    height: 1em;
    margin-top: -0.5em;
    -webkit-animation: spinner 1500ms infinite linear;
    -moz-animation: spinner 1500ms infinite linear;
    -ms-animation: spinner 1500ms infinite linear;
    -o-animation: spinner 1500ms infinite linear;
    animation: spinner 1500ms infinite linear;
    border-radius: 0.5em;
    -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
    box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
}
/* Animation */

@-webkit-keyframes spinner {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@-moz-keyframes spinner {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@-o-keyframes spinner {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@keyframes spinner {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
/* Absolute Center Spinner */

.loading2 {
    position: absolute;
    z-index: 999;
    height: 2em;
    width: 2em;
    overflow: visible;
    margin: auto;
    top: 0;
    margin-top: 1.5rem;
    margin-right: 1.8rem;
    right: 0;
}
/* Transparent Overlay */

.loading2:before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
}
.loading2:not(:required) {
    /* hide "loading..." text */
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
}
.loading2:not(:required):after {
    content: '';
    display: block;
    font-size: 10px;
    width: 1em;
    height: 1em;
    margin-top: -0.5em;
    -webkit-animation: spinner 1500ms infinite linear;
    -moz-animation: spinner 1500ms infinite linear;
    -ms-animation: spinner 1500ms infinite linear;
    -o-animation: spinner 1500ms infinite linear;
    animation: spinner 1500ms infinite linear;
    border-radius: 0.5em;
    -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
    box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
}
@media (min-width: 768px) and (max-width: 992px) {} .flex-row.first {
    background:<?php echo $color_two; ?>;
    color:<?php echo $color_one; ?>;
    border-color:<?php echo $color_two; ?>;
    font-weight:bold;
}
.flex-table:last-of-type {
    border-bottom: solid 0px <?php echo $color_three; ?>;
}
.flex-table:first-of-type {
    border-top: solid 1px white;
}
.flex-table.header {
    background: <?php echo $color_two; ?>;
    color: <?php echo $color_one; ?>;
    border-color: <?php echo $color_two; ?>;
    border-top: solid 1px <?php echo $color_three; ?>;
}
.flex-table.header.actives {
    border-top: none;
}
.flex-table.header:hover {
    background: <?php echo $color_two; ?>;
}
.flex-table.header .flex-row:hover {
    text-decoration: underline;
    cursor: pointer;
}
.flex-table.row:nth-child(odd) .flex-row:not(.first) {
    background: #f4f2f1;
}
.flex-table.row:nth-child(odd):hover .flex-row:not(.first) {
    background: <?php echo $color_one; ?>;
    transition: 500ms;
}
.flex-table:hover {
    background: <?php echo $color_one; ?>;
    transition: 500ms;
}
.table__body .flex-table:hover .flex-row.teams {
    background: <?php echo $color_one; ?>;
    transition: 500ms;
}
.table__body .flex-row.teams {
    background-color: white;
}
.header .flex-row.teams {
    background-color: <?php echo $color_two; ?>;
}
.table__body .flex-table:hover .flex-row.teams {
    background: <?php echo $color_one; ?>;
    transition: 500ms;
}
.table__body .flex-table.header:hover .flex-row.teams {
    background-color: <?php echo $color_two; ?>;
}
#widgetStandings {
    font-size: 13px;
    font-weight: bold;
}
#widgetStandings {
    width: 100%!important;
}
#matchStandings .table__body .selectedMatchStandings.flex-row {
    background-color: <?php echo $color_one; ?>;
}
.tablele-container {
    overflow: auto;
    display: grid;
}
.flex-table.header {
    display: flex;
    user-select: none;
    z-index: 2;
    top: 0;
    height: 28px;
    border-top: 0px solid <?php echo $color_two; ?>;
}
.table__body {
    display: grid;
    grid-auto-rows: 29px;
}
.flex-row {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 32px;
    overflow: hidden;
}
.header .flex-row.first,
.table__body .flex-row.first {
    position: sticky;
    position: -webkit-sticky;
    z-index: 1;
    left: 0;
}
.header .flex-row.first-sticky,
.table__body .flex-row.first-sticky {
    position: sticky;
    position: -webkit-sticky;
    z-index: 1;
    left: 0;
}
.header .flex-row.teams {
    position: sticky;
    position: -webkit-sticky;
    width: 100px;
    z-index: 1;
    white-space: nowrap;
    justify-content: flex-start;
    left: 32px;
    flex: 1;
    padding: 0 10px;
}
.header .flex-row.goals {
    width: 48px;
}
.flex-table.row {
    display: flex;
    border-bottom: 1px solid white;
    margin-right: 0px;
    margin-left: 0px;
}
.table__body .teams {
    position: sticky;
    position: -webkit-sticky;
    width: 100px;
    z-index: 1;
    box-shadow: 3px 0 2px -2px #888;
    white-space: nowrap;
    justify-content: flex-start;
    left: 32px;
    flex: 1;
    padding: 0 10px;
}
.table__body .teams a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.table__body .flex-row.goals {
    width: 48px;
}
.flex-table-error {
    display: flex;
    flex-flow: row wrap;
    border-left: solid 0px transparent;
    transition: 0.5s;
}
.leagueNameCon {
    display: flex;
    align-content: center;
    margin-bottom: 0.25rem;
}
.leagueNameImg {
    width: 82px;
    height: 82px;
    border-radius: 8px;
    border: solid 1px rgba(0, 0, 0, 0.1);
    background: no-repeat center / 72px 72px;
    background-color: #FFFFFF;
}
.image-style-for-flag {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: solid 1px <?php echo $color_one; ?>;
    background-position: center;
    /* Center the image */
    background-repeat: no-repeat;
    /* Do not repeat the image */
    background-size: cover;
    /* Resize the background image to cover the entire container */
}
.leagueImg {
    height: 13px;
    padding-left: 28px;
    margin-top: 4px;
    margin-left: 0;
    background-repeat: no-repeat;
    background-size: auto 100%;
    filter: brightness(98%);
}
.imgMatchSummary {
    width: 16px;
    height: 16px;
    background: no-repeat center / 16px 16px;
    background-color: #FFFFFF;
    margin: 0 5px;
}
.leagueName {
    display: flex;
    align-items: center;
    flex-flow: row nowrap;
    color: black;
    font: normal bold 14px Arial, Helvetica, sans-serif;
    padding-left: 1rem;
}
.matchResultsDatesTitle {
    display: flex;
    flex-flow: column nowrap;
    padding: 10px;
}
.event_home_team {
    display: flex;
    flex-flow: row nowrap;
    margin-bottom: 5px;
}
.event_home_team_part {
    flex: 1;
    display: flex;
    flex-flow: column nowrap;
}
.event_info {
    flex: 1 1;
    display: flex;
    flex-flow: column;
    align-items: center;
    margin-top: 30px;
    max-width: 150px;
}
.event_away_team_part {
    flex: 1;
    display: flex;
    flex-flow: column nowrap;
}
.event_home_team_part_name,
.event_info_status,
.event_away_team_part_name {
    padding-top: 8px;
    display: flex;
    justify-content: center;
}
.event_away_team_part_name div,
.event_home_team_part_name div {
    text-align: center;
}
.event_home_team_part_img,
.event_away_team_part_img {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-flow: column nowrap;
}
.event_info_score {
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    font: normal bold 32px Arial, Helvetica, sans-serif;
    text-align: center;
}
.matchResults-h2 {
    text-transform: capitalize;
    position: relative;
    display: inline-block;
    margin-bottom: -1px;
    background-color: <?php echo $color_three; ?>;
    border: 1px solid rgba(0, 0, 0, .125);
    text-align: inherit;
    box-sizing: border-box;
    z-index: 2;
    color: black;
    border-color: <?php echo $color_one; ?>;
    margin-top: 0;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    font-weight: bold;
    text-decoration: none;
}
.nav-tab-wrapper-all {
    padding-top: 0.5rem;
    margin-bottom: 0px;
    overflow-x: auto;
    overflow-y: hidden;
    position: relative;
}
.nav-tab-wrapper-all-container {
    display: flex;
    flex-flow: row nowrap;
    height: auto;
    margin-bottom: 0;
    padding-left: 0;
}
.nav-tab-wrapper-all-container li {
    height: auto;
    margin-bottom: 0;
    border-bottom: 0;
    position: relative;
    margin-right: 1px;
    list-style: none;
}
.nav-tab-wrapper-all-container li span {
    background: none;
    display: flex;
    align-items: center;
    white-space: nowrap;
}
.nav-tab-wrapper-all-container li span a {
    height: 100%;
    line-height: 11px;
    padding: 0.65rem 1.25rem;
    text-align: left;
    display: flex;
    flex-flow: row wrap;
    min-height: 28px;
    box-sizing: border-box;
    align-items: center;
}
.otherMatchDetails {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px 10px;
    line-height: 1.6;
    background-color: <?php echo $color_three; ?>;
    margin-bottom: 0.5rem;
}
.otherMatchDetailsInfos {
    display: inline-flex;
}
/* START MATCH SUMMARY*/

#matchSummary {
    padding-top: 0.25rem;
    margin-bottom: 0px;
    border-top: 2px solid <?php echo $color_two; ?>;
}
#matchSummary .tab-container {
    display: flex;
    flex-flow: column nowrap;
    border: 0.1px solid black;
    margin-top: 1px;
}
#matchSummary .tab-container.futureMatch {
    display: flex;
    flex-flow: column nowrap;
    border: 0.1px solid transparent;
    margin-top: 1px;
}
#matchSummary .tab-container.futureMatch p {
    text-align: center;
}
#matchSummary .action_home {
    display: flex;
    flex-flow: row wrap;
    box-sizing: border-box;
    align-items: center;
    padding: 8px 10px;
    line-height: 13px;
    border-bottom: 0.4px dotted black;
}
#matchSummary .action_away {
    flex-flow: row-reverse wrap;
    display: flex;
    box-sizing: border-box;
    align-items: center;
    padding: 8px 10px;
    line-height: 13px;
    border-bottom: 0.4px dotted black;
}
#matchSummary .action_unknown {
    display: flex;
    box-sizing: border-box;
    align-items: center;
    padding: 8px 10px;
    line-height: 13px;
    border-bottom: 0.4px dotted black;
    justify-content: center;
    width: 100%
}
.matchExtraInfosTitle {
    text-align: center;
    padding: 0 10px;
    font-weight: bold;
    min-height: 26px;
    line-height: 26px;
    background-color: <?php echo $color_three; ?>;
}
.matchExtraInfos {
    display: flex;
    flex-flow: row wrap;
    justify-content: flex-start;
    padding: 3px 10px;
    border: 0.1px solid black;
}
/* END MATCH SUMMARY */

/* Start  match statistics */

#matchStatistics {
    padding-top: 0.25rem;
    margin-bottom: 0px;
    border-top: 2px solid <?php echo $color_two; ?>;
}
#matchStatistics .tab-container {
    display: block;
    flex-flow: column nowrap;
}
.matchStatisticsRow {
    display: flex;
    flex-flow: column nowrap;
    padding: 5px 10px 10px;
}
.matchStatisticsRowText {
    display: flex;
    flex-flow: row nowrap;
    padding-bottom: 5px;
}
.matchStatisticsRowHome {
    justify-content: flex-start;
    text-align: left;
    padding-right: 5px;
    display: flex;
    flex-flow: row nowrap;
    flex: 0 0 80px;
    align-items: flex-end;
}
.matchStatisticsRowType {
    display: flex;
    flex-flow: row nowrap;
    justify-content: center;
    flex: 1;
    text-align: center;
}
.matchStatisticsRowAway {
    justify-content: flex-end;
    text-align: right;
    padding-left: 5px;
    display: flex;
    flex-flow: row nowrap;
    flex: 0 0 80px;
    align-items: flex-end;
}
.matchStatisticsRowBar {
    display: flex;
    flex-flow: row nowrap;
}
.matchStatisticsRowBarHome {
    padding-right: 1px;
    display: flex;
    flex-flow: column nowrap;
    flex: 1;
}
.matchStatisticsRowBarAway {
    padding-left: 1px;
    display: flex;
    flex-flow: column nowrap;
    flex: 1;
}
.matchStatisticsRowBarHomeBg {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    justify-content: flex-end;
    display: flex;
    flex-flow: row nowrap;
    width: 100%;
    height: 9px;
    background-color: <?php echo $color_three; ?>;
    overflow: hidden;
}
.matchStatisticsRowHomeLine {
    height: 9px;
    background-color: black;
}
.matchStatisticsRowBarAwayBg {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    justify-content: flex-start;
    display: flex;
    flex-flow: row nowrap;
    width: 100%;
    height: 9px;
    background-color: <?php echo $color_three; ?>;
    overflow: hidden;
}
.matchStatisticsRowAwayLine {
    height: 9px;
    background-color: black;
}
/* end match statistics*/

/* start lineup*/

#lineups {
    padding-top: 0.25rem;
    margin-bottom: 0px;
    border-top: 2px solid <?php echo $color_two; ?>;
}
.lineupsContainer {
    width: 100%;
    display: inline-flex;
}
#lineups .col-left {
    min-width: 160px;
    width: 50%;
}
#lineups .col-right {
    min-width: 160px;
    width: 50%;
}
.lineupsContainerHome {
    width: 100%;
    min-width: 160px;
    justify-content: flex-start;
    display: flex;
    flex-flow: row wrap;
    box-sizing: border-box;
    align-items: center;
    padding: 5px 10px;
    line-height: 13px;
}
.lineupsContainerAway {
    width: 100%;
    justify-content: flex-end;
    display: flex;
    flex-flow: row wrap;
    box-sizing: border-box;
    align-items: center;
    padding: 5px 10px;
    line-height: 13px;
    text-align: right;
}
.lineupsNb {
    width: 16px;
}
.lineupsFlag {
    height: 17px;
    padding-left: 26px;
    margin-top: 1px;
    margin-left: 0;
    background-repeat: no-repeat;
    background-size: auto 100%;
    filter: brightness(98%);
}
.lineupsContainerHome .lineupsNb {
    padding-right: 5px;
}
.lineupsContainerAway .lineupsNb {
    padding-left: 5px;
}
.lineupsContainerHome .lineupsPlayer {
    padding-left: 10px;
}
.lineupsContainerAway .lineupsPlayer {
    padding-right: 10px;
}
.lineupsTitle {
    text-align: center;
    padding: 0 10px;
    font-weight: bold;
    min-height: 26px;
    line-height: 26px;
    background-color: <?php echo $color_three; ?>;
    border: 1px solid #CCCCCC;
}
/*end lineup*/

/* start h2h */

#h2h {
    padding-top: 0.25rem;
    margin-bottom: 0px;
    border-top: 2px solid <?php echo $color_two; ?>;
}
.h2hTitle {
    padding: 0 10px;
    font-weight: bold;
    min-height: 26px;
    line-height: 26px;
    background-color: <?php echo $color_three; ?>;
    border: 1px solid #CCCCCC;
}
.h2hContainer {
    width: 100%;
}
.h2hFlag {
    height: 17px;
    padding-left: 26px;
    margin-left: 0;
    background-repeat: no-repeat;
    background-size: auto 25px;
    filter: brightness(98%);
}
.h2hdivTable {
    display: table;
    width: 100%;
}
.h2hdivTableRow {
    display: table-row;
}
.h2hdivTableHeading {
    background-color: #EEE;
    display: table-header-group;
}
.h2hdivTableCell,
.h2hdivTableHead {
    border-top: 1px solid #CCCCCC;
    border-bottom: 1px solid #CCCCCC;
    display: table-cell;
    vertical-align: middle;
    padding: 7px 10px 4px 10px;
}
.h2hdivTableCell.h2hFlagContainer {
    padding: 0;
}
.h2hdivTableHeading {
    background-color: #EEE;
    display: table-header-group;
    font-weight: bold;
}
.h2hdivTableFoot {
    background-color: #EEE;
    display: table-footer-group;
    font-weight: bold;
}
.h2hdivTableBody {
    display: table-row-group;
}
.h2hdivTableCell.h2hTime {
    width: 55px;
    max-width: 55px;
}
.h2hdivTableCell.h2hResult {
    text-align: right;
}
.h2hdivTableCell.h2hFlag {
    width: 20px;
    min-width: 20px;
}
#h2h .h2hFlag {
    height: 21px;
    padding-left: 26px;
    margin-top: 3px;
    margin-left: 0;
    background-repeat: no-repeat;
    background-size: auto 20px;
    filter: brightness(98%);
}
/*end h2h*/

/*start standings*/

#matchStandings,
#matchTopScorers {
    margin: 0;
    font-family: open sans;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
    box-sizing: border-box;
}
#matchStandings a,
#matchTopScorers a {
    color: black;
    text-decoration: none;
}
#matchStandings .titleWidget,
#matchTopScorers .titleWidget {
    color: black;
    background-color: <?php echo $color_one; ?>;
    display: inline-flex;
    border-color: <?php echo $color_one; ?>;
    box-sizing: border-box;
    margin: 0 0.25rem 0 0;
    padding: .5rem 1.25rem;
    font-weight: bold;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
}
#matchStandings .standing-h2,
#matchTopScorers .standing-h2 {
    text-transform: capitalize;
    position: relative;
    display: inline-block;
    margin-bottom: -1px;
    background-color: <?php echo $color_three; ?>;
    border: 1px solid rgba(0, 0, 0, .125);
    text-align: inherit;
    box-sizing: border-box;
    z-index: 2;
    color: black;
    border-color: <?php echo $color_one; ?>;
    padding: 0.25rem 1.25rem;
    margin-top: 0;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    font-weight: bold;
}
/*End standings*/

/*start topscorers*/

#matchTopScorers {
    padding-top: 0.25rem;
    margin-bottom: 0px;
    border-top: 2px solid <?php echo $color_two; ?>;
}
#matchTopScorers .header .flex-row.players {
    position: sticky;
    position: -webkit-sticky;
    width: 40%;
    min-width: 100px;
    z-index: 1;
    white-space: nowrap;
    justify-content: flex-start;
    left: 32px;
    flex: 1;
    padding: 0 10px;
}
#matchTopScorers .table__body .players {
    position: sticky;
    position: -webkit-sticky;
    width: 40%;
    min-width: 100px;
    z-index: 1;
    white-space: nowrap;
    justify-content: flex-start;
    left: 32px;
    flex: 1;
    padding: 0 10px;
}
#matchTopScorers .header .flex-row.playerTeam {
    justify-content: flex-start;
    width: 50%;
}
#matchTopScorers .table__body .playerTeam {
    justify-content: flex-start;
    width: 50%;
}
#matchTopScorers .goals {
    width: 50px;
}
#matchTopScorers .flex-table.row a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.table__body .flex-row.players {
    background-color: white;
}
.header .flex-row.players {
    background-color: <?php echo $color_two; ?>;
}
#matchTopScorers .flex-table:hover:not(.header) .flex-row.players {
    background: <?php echo $color_one; ?>;
    transition: 500ms;
}
/*end topscorers*/

/* new start h2h */

#matchh2h {
    padding-top: 0.25rem;
    margin-bottom: 0px;
    border-top: 2px solid <?php echo $color_two; ?>;
}
#matchh2h .flex-table:hover:not(.header) .flex-row.matchh2hDate,
#matchh2h .flex-table:hover:not(.header) .flex-row.matchh2hFlags,
#matchh2h .flex-table:hover:not(.header) .flex-row.matchh2hEventFinalResult {
    background: <?php echo $color_one; ?>;
}
#matchh2h .flex-table:hover {
    transition: initial;
}
.matchh2hFlag {
    height: 20px;
    padding-left: 20px;
    margin-left: 0;
    background-repeat: no-repeat;
    background-size: auto 20px;
    filter: brightness(98%);
}
#matchh2h .table__body .matchh2hDate {
    position: sticky;
    position: -webkit-sticky;
    z-index: 1;
    left: 0;
    padding-left: 8px;
    min-width: 50px;
}
#matchh2h .table__body .matchh2hFlags {
    position: sticky;
    position: -webkit-sticky;
    width: 20px;
    max-width: 20px;
    z-index: 1;
    white-space: nowrap;
    justify-content: flex-start;
    left: 58px;
    flex: 1;
    padding: 0 0 0 10px;
}
#matchh2h .table__body .matchh2hEventFinalResult {
    width: 100%;
}
#matchh2h .table__body .fix-width {
    display: flex;
    align-items: center;
    justify-content: left;
    min-width: 29%;
    overflow: hidden;
    padding-top: 8px;
    padding-bottom: 8px;
    padding-left: 10px;
}
#matchh2h .countryNameStyle {
    text-transform: capitalize;
    display: flex;
    align-items: center;
    justify-content: left;
    min-width: 17%;
    overflow: hidden;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-right: 10px;
}
#matchh2h .countryNameStyle::first-letter {
    text-transform: uppercase;
}
#matchh2h .header .matchh2hHeader {
    position: sticky;
    position: -webkit-sticky;
    z-index: 1;
    left: 0;
    padding: 0 10px;
}
.table__body .flex-row.matchh2hDate,
.table__body .flex-row.matchh2hFlags {
    background-color: white;
}
#matchh2h .table__body {
    grid-auto-rows: initial;
}
#matchh2h .teamClassStyleH2hWinnerHome {
    font-weight: bold;
}
#matchh2h .teamClassStyleH2hWinnerAway {
    font-weight: bold;
}
#matchh2h .teamClassStyleH2hEqual {
    font-weight: normal;
}
/* end new h2h 

/* start menu bar */
.logo-img-size {
    max-width: 100%;
    height: 45px;
}
.menuBar .backButton {
    padding: 1em 3em 1em 1em;
    margin: 0;
    text-decoration: underline;
    text-align: right;
}
.menuBar .backButton:hover {
    cursor: pointer;
}
/* end menu bar */

/* start close window */

.closeWindow {
    padding: 1rem;
    text-align: center;
    text-decoration: underline;
}
.closeWindow:hover {
    cursor: pointer;
}
/* end close window */

/*start odds*/

#matchOdds {
    margin: 0;
    font-family: open sans;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
    box-sizing: border-box;
}
#matchOdds a {
    color: black;
    text-decoration: none;
}
#matchOdds .titleWidget {
    color: black;
    background-color: <?php echo $color_one; ?>;
    display: inline-flex;
    border-color: <?php echo $color_one; ?>;
    box-sizing: border-box;
    margin: 0 0.25rem 0 0;
    padding: .5rem 1.25rem;
    font-weight: bold;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
}
#matchOdds .standing-h2 {
    text-transform: capitalize;
    position: relative;
    display: inline-block;
    margin-bottom: -1px;
    background-color: <?php echo $color_three; ?>;
    border: 1px solid rgba(0, 0, 0, .125);
    text-align: inherit;
    box-sizing: border-box;
    z-index: 2;
    color: black;
    border-color: <?php echo $color_one; ?>;
    padding: 0.25rem 1.25rem;
    margin-top: 0;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    font-weight: bold;
}
#matchOdds .flex-table.header:hover {
    color: white!important;
}

#matchOdds .flex-table:hover a {
    color: white!important;
}

.table__body .flex-table:hover .flex-row.bookmakers {
    background: <?php echo $color_one; ?>;
    /*transition: 500ms;*/
    color: white!important;
}
.table__body .flex-row.bookmakers {
    background-color: white;
}
.header .flex-row.bookmakers {
    background-color: <?php echo $color_two; ?>;
}
.table__body .flex-table:hover .flex-row.bookmakers {
    background: <?php echo $color_one; ?>;
    /*transition: 500ms;*/
    color: white!important;
}
.table__body .flex-table.header:hover .flex-row.bookmakers {
    background-color: <?php echo $color_two; ?>;
}
.header .flex-row.bookmakers {
    position: sticky;
    position: -webkit-sticky;
    width: 100px;
    z-index: 1;
    white-space: nowrap;
    justify-content: flex-start;
    flex: 1;
    padding: 0 10px;
}
.table__body .bookmakers {
    position: sticky;
    position: -webkit-sticky;
    width: 100px;
    z-index: 1;
    box-shadow: 3px 0 2px -2px #888;
    white-space: nowrap;
    justify-content: flex-start;
    flex: 1;
    padding: 0 10px;
}
.table__body .bookmakers a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.header .flex-row.oddWidth {
    width: 55px;
}

.table__body .flex-row.oddWidth {
    width: 55px;
}

.lineForNoData {
    padding-top: 0.25rem;
    margin-bottom: 0px;
    border-top: 2px solid <?php echo $color_two; ?>;
}
/*End odds*/

/*start predictions*/

#matchPredictions {
    margin: 0;
    font-family: open sans;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
    box-sizing: border-box;
}
#matchPredictions a {
    color: black;
    text-decoration: none;
}
#matchPredictions .titleWidget {
    color: black;
    background-color: <?php echo $color_one; ?>;
    display: inline-flex;
    border-color: <?php echo $color_one; ?>;
    box-sizing: border-box;
    margin: 0 0.25rem 0 0;
    padding: .5rem 1.25rem;
    font-weight: bold;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
}
#matchPredictions .standing-h2 {
    text-transform: capitalize;
    position: relative;
    display: inline-block;
    margin-bottom: -1px;
    background-color: <?php echo $color_three; ?>;
    border: 1px solid rgba(0, 0, 0, .125);
    text-align: inherit;
    box-sizing: border-box;
    z-index: 2;
    color: black;
    border-color: <?php echo $color_one; ?>;
    padding: 0.25rem 1.25rem;
    margin-top: 0;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    font-weight: bold;
}
#matchPredictions .flex-table.header:hover {
    color: white!important;
}

#matchPredictions .flex-table:hover a {
    color: white!important;
}
/*End predictions*/

.d-none-tab-odds {
    display: none!important;
}

.d-none-tab-prediction {
    display: none!important;
}

</style>