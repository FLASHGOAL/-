<style>
@import 'https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap';
section.widgetLiveScore {
    padding-top: 0!important;
    padding-bottom: 0!important;
}
section.widgetLiveScore section {
    padding-top: 0!important;
    padding-bottom: 0!important;
}
@media (max-width: 768px) {
    .widgetLiveScore {
        min-width: 100%;
    }
}
.nav-tab-active {
    color: <?php echo ms_Main::$settings['ms_color_one']; ?>!important;
    background-color: <?php echo ms_Main::$settings['ms_color_two']; ?>!important;
    border: 1px solid <?php echo ms_Main::$settings['ms_color_two']; ?>!important;
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
    border-top: 3px solid <?php echo ms_Main::$settings['ms_color_two']; ?>;
}
.widgetLiveScore {
    margin: 0;
    font-family: open sans;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
    box-sizing: border-box;
}
.standingsTeamsSpan {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.widgetLiveScore a {
    color: black;
    text-decoration: none;
    font-weight: lighter;
}
.widgetLiveScore .titleWidget {
    color: black;
    background-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
    display: inline-flex;
    border-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
    box-sizing: border-box;
    margin: 0 0.25rem 0 0;
    padding: .5rem 1.25rem;
    font-weight: bold;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
}
.widgetLiveScore .standing-h2 {
    text-transform: capitalize;
    position: relative;
    display: inline-block;
    margin-bottom: -1px;
    background-color: <?php echo ms_Main::$settings['ms_color_three']; ?>;
    border: 1px solid rgba(0, 0, 0, .125);
    text-align: inherit;
    box-sizing: border-box;
    z-index: 2;
    color: black;
    border-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
    padding: 0.5rem 1.25rem;
    margin-top: 0;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    font-weight: bold;
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
.flex-row.first {
    background:<?php echo ms_Main::$settings['ms_color_two']; ?>;
    color:<?php echo ms_Main::$settings['ms_color_one']; ?>;
    border-color:<?php echo ms_Main::$settings['ms_color_two']; ?>;
    font-weight:bold;
}
.flex-table:last-of-type {
    border-bottom: solid 0px <?php echo ms_Main::$settings['ms_color_three']; ?>;
}
.flex-table:first-of-type {
    border-top: solid 1px white;
}
.flex-table.header {
    background: <?php echo ms_Main::$settings['ms_color_two']; ?>;
    color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
    border-color: <?php echo ms_Main::$settings['ms_color_two']; ?>;
    border-top: solid 1px <?php echo ms_Main::$settings['ms_color_three']; ?>;
    height: initial;
}
.flex-table.header.actives {
    border-top: none;
}
.flex-table.header:hover {
    background: <?php echo ms_Main::$settings['ms_color_two']; ?>;
}
.flex-table.header .flex-row:hover {
    text-decoration: underline;
    cursor: pointer;
}
#allGame .flex-table.row:nth-child(odd) .flex-row:not(.first),
#liveGame .flex-table.row:nth-child(odd) .flex-row:not(.first) {
    background: #f4f2f1;
}
#allGame .flex-table.row:nth-child(odd):hover .flex-row:not(.first),
#liveGame .flex-table.row:nth-child(odd):hover .flex-row:not(.first) {
    background: <?php echo ms_Main::$settings['ms_color_one']; ?>;
    transition: 500ms;
}
.flex-table:hover {
    background: <?php echo ms_Main::$settings['ms_color_one']; ?>;
    transition: 500ms;
}
.table__body .flex-table:hover .flex-row.teams {
    background: <?php echo ms_Main::$settings['ms_color_one']; ?>;
    transition: 500ms;
}
.table__body .flex-row.teams {
    background-color: white;
}
.header .flex-row.teams {
    background-color: <?php echo ms_Main::$settings['ms_color_two']; ?>;
}
.table__body .flex-table:hover .flex-row.teams {
    background: <?php echo ms_Main::$settings['ms_color_one']; ?>;
    transition: 500ms;
}
.table__body .flex-table.header:hover .flex-row.teams {
    background-color: <?php echo ms_Main::$settings['ms_color_two']; ?>;
}
.widgetLiveScore {
    font-size: 13px;
    font-weight: bold;
}
.tablele-container {
    overflow: auto;
    display: grid;
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
.leagueName {
    display: flex;
    align-items: center;
    flex-flow: row nowrap;
    color: black;
    font-family: open sans;
    padding-left: 1rem;
}
.matchIsLive {
    color: #ED2939;
    font-weight: bold;
}
/* START #allGame */

#allGame .table__body_fixtures .flex-table:hover {
    cursor: pointer;
}
#allGame .table__body_fixtures .flex-table {
    color: black;
    text-decoration: none;
    font-weight: lighter;
}
#allGame .event_time_text_align {
    text-align: center;
}
#allGame {
    font-size: 13px;
    font-weight: bold;
}
#allGame .table__body_fixtures {
    display: grid;
}
#allGame .flex-row {
    padding-left: 0.5rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
#allGame #allGameContentTable .tablele-container {
    padding-top: 0.25rem;
    margin-bottom: 0px;
    border-top: 3px solid <?php echo ms_Main::$settings['ms_color_two']; ?>;
}
#allGame .finishedMatchScore {
    font-weight: bold;
}
#allGame .firstHalfStyle {
    color: gray;
}
.table__body_fixtures .flex-row.matchDetails {
    justify-content: space-around;
    width: 80px;
    text-align: center;
}
.table__body_fixtures .flex-row.matchHomeTeam {
    justify-content: flex-end;
    text-align: right;
    flex: 1;
}
.table__body_fixtures .flex-row.matchDelimiter {
    width: 50px;
}
.table__body_fixtures .flex-row.matchAwayTeam {
    justify-content: flex-start;
    flex: 1;
}
#allGame .fixtureslineThrough {
    text-decoration: line-through;
}
#allGame .table__body_fixtures .winningMatchStyle.flex-row {
    font-weight: bold;
}
#allGame .countryOfTeams {
    text-transform: uppercase;
    margin-right: 5px;
}
#allGame .matchDelimiter {
    flex: 1;
    display: flex;
    flex-flow: column nowrap;
}
#allGame .matchPen {
    font-weight: normal;
}
#allGame .flex-table.header {
    display: flex;
    user-select: none;
    z-index: 2;
    top: 0;
    height: auto;
    border-top: 0px solid <?php echo ms_Main::$settings['ms_color_two']; ?>;
}
/* END #allGame */

/* START #liveGame */

#liveGame .countryOfTeams {
    text-transform: uppercase;
    margin-right: 5px;
}

#liveGame .table__body_results .flex-table:hover {
    cursor: pointer;
}
#liveGame .table__body_results .flex-table {
    color: black;
    text-decoration: none;
    font-weight: lighter;
}
#liveGame .event_time_text_align {
    text-align: center;
}
#liveGame {
    font-size: 13px;
    font-weight: bold;
}
#liveGame .table__body_results {
    display: grid;
}
#liveGame .flex-row {
    padding-left: 0.5rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
#liveGame #liveGameContentTable .tablele-container {
    padding-top: 0.25rem;
    margin-bottom: 0px;
    border-top: 3px solid <?php echo ms_Main::$settings['ms_color_two']; ?>;
}
#liveGame .firstHalfStyle {
    color: gray;
}
.table__body_results .flex-row.matchDetails {
    justify-content: space-around;
    width: 80px;
}
.table__body_results .flex-row.matchHomeTeam {
    justify-content: flex-end;
    text-align: right;
    flex: 1;
}
.table__body_results .flex-row.matchDelimiter {
    width: 50px;
}
.table__body_results .flex-row.matchAwayTeam {
    justify-content: flex-start;
    flex: 1;
}
#liveGame .resultslineThrough {
    text-decoration: line-through;
}
#liveGame .table__body_fixtures .matchHomeTeam,
#liveGame .table__body_fixtures .matchAwayTeam {
    font-weight: normal;
}
#liveGame .table__body_fixtures .winningMatchStyle.flex-row {
    font-weight: bold;
}
#liveGame .flex-table.header {
    display: flex;
    user-select: none;
    z-index: 2;
    top: 0;
    border-top: 0px solid <?php echo ms_Main::$settings['ms_color_two']; ?>;
}
/* END #liveGame */

.countryListDisplays {
    display: flex;
    flex-flow: row nowrap;
    justify-content: center;
    align-items: center;
}
.countryLogo {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    display: flex;
    flex-flow: column nowrap;
}
.countryLogo {
    height: 20px;
    padding-left: 30px;
    margin-left: 0.75rem;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    filter: brightness(98%);
}
.countryListDisplays .keyOfTeam {
    flex: 1;
    display: flex;
    padding-right: 0.5rem;
}
.countryListDisplays {
    position: sticky;
    position: -webkit-sticky;
    z-index: 1;
    left: 0;
}
#liveGame .table__body_fixtures .matchHomeTeam,
#liveGame .table__body_fixtures .matchAwayTeam,
#allGame .table__body_fixtures .matchHomeTeam,
#allGame .table__body_fixtures .matchAwayTeam {
    min-width: 100px;
}
#liveScoreCalendarContainer {
    margin-bottom: .25rem;
    display: flex;
    align-items: center;
    justify-content: center;
}
#liveScoreCalendarContainer a {
    width: 100%;
    display: inline;
    text-align: center;
}
.activeDateCalendar {
    background-color: red;
}
.callendarDays {
    color: black;
    background-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
    display: inline-flex;
    border-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
    box-sizing: border-box;
    margin: 0 0.25rem 0 0;
    padding: .5rem 1.25rem;
    font-weight: bold;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    border-bottom-left-radius: .25rem;
    border-bottom-right-radius: .25rem;
    box-sizing: border-box;
}
.callendarDaysActive {
    color: <?php echo ms_Main::$settings['ms_color_one']; ?>!important;
    background-color: <?php echo ms_Main::$settings['ms_color_two']; ?>!important;
}
@media (max-width: 768px) {
    .break-mobile-grid {
        flex-basis: 100%;
        height: 0;
    }
    .container-mobile-grid {
        display: flex;
        flex-wrap: wrap;
    }
    .item-mobile-grid {
        flex-grow: 1;
    }
    .item-wide-mobile-grid {
        flex-grow: 3;
    }
    .d-none-mobile-div {
        display: none!important;
    }
    .d-show-mobile-div {
        display: block;
    }
    #allGame .table__body_fixtures .flex-row.matchAwayTeam.firstHalfStyle.mobile-firstHalfStyle,
    #liveGame .table__body_fixtures .flex-row.matchAwayTeam.firstHalfStyle.mobile-firstHalfStyle {
        justify-content: center;
        text-align: center;
        margin: 0 auto;
    }
    #liveScoreCalendarContainer {
        display: none;
    }
}
@media (max-width: 1200px) {
    .callendarDays {
        color: black;
        background-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
        display: inline-flex;
        border-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
        box-sizing: border-box;
        margin: 0 0.25rem 0 0;
        padding: .5rem .25rem;
        font-weight: bold;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        border-bottom-left-radius: .25rem;
        border-bottom-right-radius: .25rem;
        box-sizing: border-box;
    }
}
</style>