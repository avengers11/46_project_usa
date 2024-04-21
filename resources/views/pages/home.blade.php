@extends('layouts.master')
@section('master')

<style>
.elementor-17 .elementor-element.elementor-element-819981b {
    padding: 0px 0px 0px 0px;
    z-index: 10;
}

.elementor-17 .elementor-element.elementor-element-155ac7d > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-155ac7d > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-d27860f:not(.elementor-motion-effects-element-type-background), .elementor-17 .elementor-element.elementor-element-d27860f > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    background-color: transparent;
    background-image: linear-gradient(180deg, #F1F4FB 0%, #F1F4FB 100%);
}

.elementor-17 .elementor-element.elementor-element-d27860f {
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding: 120px 0px 120px 0px;
    z-index: 10;
}

.elementor-17 .elementor-element.elementor-element-d27860f > .elementor-background-overlay {
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-17 .elementor-element.elementor-element-8f69d77 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-8f69d77 > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-6aa2f9d > .elementor-container {
    max-width: 1200px;
}

.elementor-17 .elementor-element.elementor-element-6aa2f9d {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-be3820b > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-be3820b > .elementor-element-populated {
    padding: 0px 15px 0px 15px;
}

.elementor-17 .elementor-element.elementor-element-11d9846 .sec-title {
    text-align: center;
    padding: 0px 100px 62px 100px;
}

.elementor-17 .elementor-element.elementor-element-11d9846 .sec-title .sub-title .subtitle-border {
    height: 1px;
}

.elementor-17 .elementor-element.elementor-element-2c90ceb > .elementor-container {
    max-width: 1200px;
}

.elementor-17 .elementor-element.elementor-element-2c90ceb {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-aa781b2 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-aa781b2 > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-7f15c46 {
    padding: 120px 0px 110px 0px;
    z-index: 10;
}

.elementor-17 .elementor-element.elementor-element-c383010 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-c383010 > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-5f1833b > .elementor-container {
    max-width: 1200px;
}

.elementor-17 .elementor-element.elementor-element-5f1833b {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-ea09249 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-ea09249 > .elementor-element-populated {
    padding: 0px 15px 0px 015px;
}

.elementor-17 .elementor-element.elementor-element-fc6932d > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-fc6932d > .elementor-element-populated {
    margin: 0px 0px 0px -15px;
    --e-column-margin-right: 0px;
    --e-column-margin-left: -15px;
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-6cfea95 .sec-title {
    padding: 0px 0px 30px 0px;
}

.elementor-17 .elementor-element.elementor-element-6cfea95 .sec-title .sub-title .subtitle-border {
    height: 1px;
}

.elementor-17 .elementor-element.elementor-element-6cfea95 .sec-title p {
    padding: 20px 0px 0px 0px;
    color: #011E45;
    font-family: "Barlow", Sans-serif;
    font-size: 22px;
    font-weight: 600;
    line-height: 32px;
}

.elementor-17 .elementor-element.elementor-element-76de630 {
    color: #011E45;
    font-family: "Barlow", Sans-serif;
    font-size: 22px;
    font-weight: 600;
    line-height: 32px;
}

.elementor-17 .elementor-element.elementor-element-76de630 > .elementor-widget-container {
    margin: 0px 0px 26px 0px;
}

.elementor-17 .elementor-element.elementor-element-67b1e5c {
    color: #444444;
    font-family: "Barlow", Sans-serif;
    font-size: 18px;
    font-weight: 400;
    line-height: 32px;
}

.elementor-17 .elementor-element.elementor-element-67b1e5c > .elementor-widget-container {
    margin: 0px 0px 31px 0px;
}

.elementor-17 .elementor-element.elementor-element-b4469d7 > .elementor-widget-container {
    padding: 0px 15px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-b4469d7 {
    width: var( --container-widget-width, 50% );
    max-width: 50%;
    --container-widget-width: 50%;
    --container-widget-flex-grow: 0;
}

.elementor-17 .elementor-element.elementor-element-f1817ad > .elementor-widget-container {
    padding: 0px 0px 0px 23px;
}

.elementor-17 .elementor-element.elementor-element-f1817ad {
    width: var( --container-widget-width, 50% );
    max-width: 50%;
    --container-widget-width: 50%;
    --container-widget-flex-grow: 0;
}

.elementor-17 .elementor-element.elementor-element-7c2b8a4 > .elementor-widget-container {
    padding: 0px 6px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-7c2b8a4 {
    width: var( --container-widget-width, 50% );
    max-width: 50%;
    --container-widget-width: 50%;
    --container-widget-flex-grow: 0;
}

.elementor-17 .elementor-element.elementor-element-428b013 > .elementor-widget-container {
    padding: 0px 0px 0px 23px;
}

.elementor-17 .elementor-element.elementor-element-428b013 {
    width: var( --container-widget-width, 50% );
    max-width: 50%;
    --container-widget-width: 50%;
    --container-widget-flex-grow: 0;
}

.elementor-17 .elementor-element.elementor-element-ce33ef2 .chirokind-btn:after, .elementor-17 .elementor-element.elementor-element-ce33ef2 .chirokind-btn {
    background-color: transparent;
    background-image: linear-gradient(180deg, #1A6FE1 0%, #1A6FE1 100%);
}

.elementor-17 .elementor-element.elementor-element-ce33ef2 .chirokind-btn {
    margin: 45px 0px 0px 0px;
    border-radius: 5px 5px 5px 5px;
}

.elementor-17 .elementor-element.elementor-element-b91b167 {
    padding: 0px 0px 0px 0px;
    z-index: 10;
}

.elementor-17 .elementor-element.elementor-element-c37e3a8 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-c37e3a8 > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-de65c3b:not(.elementor-motion-effects-element-type-background), .elementor-17 .elementor-element.elementor-element-de65c3b > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    background-color: transparent;
    background-image: linear-gradient(180deg, #08254F 0%, #08254F 100%);
}

.elementor-17 .elementor-element.elementor-element-de65c3b > .elementor-background-overlay {
    background-color: #08254F;
    background-image: url("https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/choose-style2-bg.jpg");
    background-position: top center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.05;
    mix-blend-mode: luminosity;
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-17 .elementor-element.elementor-element-de65c3b {
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding: 120px 0px 120px 0px;
    z-index: 10;
}

.elementor-17 .elementor-element.elementor-element-0ff8e76 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-0ff8e76 > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-07f09a1 > .elementor-container {
    max-width: 1060px;
}

.elementor-17 .elementor-element.elementor-element-07f09a1 {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-3f622ea > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-3f622ea > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-f4408b0 .sec-title {
    text-align: center;
    padding: 0px 0px 62px 0px;
}

.elementor-17 .elementor-element.elementor-element-f4408b0 .te-subtitle {
    color: #E12454;
}

.elementor-17 .elementor-element.elementor-element-f4408b0 .sec-title .sub-title .subtitle-border {
    background-color: #E12454;
    height: 2px;
}

.elementor-17 .elementor-element.elementor-element-f4408b0 .sec-title h2 {
    color: #FFFFFF;
}

.elementor-17 .elementor-element.elementor-element-f4408b0 .sec-title p {
    padding: 10px 0px 0px 0px;
    color: #FFFFFFCC;
}

.elementor-17 .elementor-element.elementor-element-178a4b0 > .elementor-container {
    max-width: 1060px;
}

.elementor-17 .elementor-element.elementor-element-178a4b0 {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-3fe12be > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-3fe12be > .elementor-element-populated {
    padding: 0px 0px 0px 15px;
}

.elementor-17 .elementor-element.elementor-element-192ed31 > .elementor-widget-container {
    border-style: solid;
    border-width: 1px 0px 0px 0px;
    border-color: #FFFFFF33;
}

.elementor-17 .elementor-element.elementor-element-888e5c3 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-888e5c3 > .elementor-element-populated {
    padding: 0px 15px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-742ea6d > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-742ea6d > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-edfdda7 > .elementor-widget-container {
    border-style: solid;
    border-width: 1px 0px 0px 0px;
    border-color: #FFFFFF33;
}

.elementor-17 .elementor-element.elementor-element-667a6da:not(.elementor-motion-effects-element-type-background), .elementor-17 .elementor-element.elementor-element-667a6da > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    background-color: transparent;
    background-image: linear-gradient(180deg, #F2F2F6 0%, #F2F2F6 100%);
}

.elementor-17 .elementor-element.elementor-element-667a6da > .elementor-background-overlay {
    background-image: url("https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/map-1.png");
    background-position: top left;
    background-repeat: no-repeat;
    opacity: 0.45;
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-17 .elementor-element.elementor-element-667a6da {
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding: 120px 0px 120px 0px;
    z-index: 10;
}

.elementor-17 .elementor-element.elementor-element-bcf7c1b > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-bcf7c1b > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-c022e9e > .elementor-container {
    max-width: 1200px;
}

.elementor-17 .elementor-element.elementor-element-c022e9e {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-5c9d442 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-5c9d442 > .elementor-element-populated {
    padding: 0px 15px 0px 15px;
}

.elementor-17 .elementor-element.elementor-element-cda7693 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-cda7693 > .elementor-element-populated {
    padding: 0px 15px 0px 15px;
}

.elementor-17 .elementor-element.elementor-element-02208c2 {
    padding: 120px 0px 60px 0px;
    z-index: 10;
}

.elementor-17 .elementor-element.elementor-element-4e94877 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-4e94877 > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-8490139 > .elementor-container {
    max-width: 1200px;
}

.elementor-17 .elementor-element.elementor-element-8490139 {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-1fbf49a > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-1fbf49a > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-ca5c52a .sec-title {
    padding: 0px 0px 21px 0px;
}

.elementor-17 .elementor-element.elementor-element-ca5c52a > .elementor-widget-container {
    padding: 0px 0px 0px 15px;
}

.elementor-bc-flex-widget .elementor-17 .elementor-element.elementor-element-feceb45.elementor-column .elementor-widget-wrap {
    align-items: center;
}

.elementor-17 .elementor-element.elementor-element-feceb45.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated {
    align-content: center;
    align-items: center;
}

.elementor-17 .elementor-element.elementor-element-feceb45 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-feceb45 > .elementor-element-populated {
    padding: 0px 15px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-347e8a0 .yt-btn {
    text-align: right;
}

.elementor-17 .elementor-element.elementor-element-327b39f > .elementor-container {
    max-width: 1200px;
}

.elementor-17 .elementor-element.elementor-element-327b39f {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-1f4c7c3 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-1f4c7c3 > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-b182653 {
    color: #444444;
    font-family: "Barlow", Sans-serif;
    font-size: 20px;
    font-weight: 400;
    line-height: 28px;
}

.elementor-17 .elementor-element.elementor-element-b182653 > .elementor-widget-container {
    margin: 0px 0px 0px 0px;
    padding: 0px 15px 54px 15px;
}

.elementor-17 .elementor-element.elementor-element-9f89286 > .elementor-container {
    max-width: 1200px;
}

.elementor-17 .elementor-element.elementor-element-9f89286 {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-839e315 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-839e315 > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-ce76eee {
    padding: 0px 0px 0px 0px;
    z-index: 10;
}

.elementor-17 .elementor-element.elementor-element-92d2120 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-92d2120 > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-63e7d1a {
    padding: 120px 0px 70px 0px;
    z-index: 10;
}

.elementor-17 .elementor-element.elementor-element-0626071 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-0626071 > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-beef71b > .elementor-container {
    max-width: 1200px;
}

.elementor-17 .elementor-element.elementor-element-beef71b {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-62cef9b > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-62cef9b > .elementor-element-populated {
    padding: 0px 15px 0px 15px;
}

.elementor-17 .elementor-element.elementor-element-5ed9fd0 .sec-title .sub-title .subtitle-border {
    height: 1px;
}

.elementor-17 .elementor-element.elementor-element-5ed9fd0 .sec-title p {
    padding: 20px 0px 0px 0px;
    line-height: 32px;
}

.elementor-17 .elementor-element.elementor-element-2f14862 > .elementor-widget-container {
    margin: 20px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-e48d272 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-e48d272 > .elementor-element-populated {
    padding: 0px 15px 0px 15px;
}

.elementor-17 .elementor-element.elementor-element-989e8cd:not(.elementor-motion-effects-element-type-background), .elementor-17 .elementor-element.elementor-element-989e8cd > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    background-color: #FFFFFF;
}

.elementor-17 .elementor-element.elementor-element-989e8cd {
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding: 0px 0px 0px 0px;
    z-index: 10;
}

.elementor-17 .elementor-element.elementor-element-989e8cd > .elementor-background-overlay {
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-17 .elementor-element.elementor-element-6b31bcf > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-6b31bcf > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-7a908f1 {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-22c36a6 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-22c36a6 > .elementor-element-populated {
    padding: 0px 5px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-a24e256 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-a24e256 > .elementor-element-populated {
    padding: 0px 15px 0px 5px;
}

.elementor-17 .elementor-element.elementor-element-2cf0b53:not(.elementor-motion-effects-element-type-background), .elementor-17 .elementor-element.elementor-element-2cf0b53 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    background-color: #FFFFFF;
}

.elementor-17 .elementor-element.elementor-element-2cf0b53 {
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding: 90px 0px 100px 0px;
    z-index: 10;
}

.elementor-17 .elementor-element.elementor-element-2cf0b53 > .elementor-background-overlay {
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

.elementor-17 .elementor-element.elementor-element-bc879ff > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-bc879ff > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-6c7c65f > .elementor-container {
    max-width: 1200px;
}

.elementor-17 .elementor-element.elementor-element-6c7c65f {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-e47c146 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-e47c146 > .elementor-element-populated {
    padding: 0px 0px 0px 15px;
}

.elementor-17 .elementor-element.elementor-element-8b93dc0 .sec-title .sub-title .subtitle-border {
    height: 2px;
}

.elementor-bc-flex-widget .elementor-17 .elementor-element.elementor-element-c116855.elementor-column .elementor-widget-wrap {
    align-items: center;
}

.elementor-17 .elementor-element.elementor-element-c116855.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated {
    align-content: center;
    align-items: center;
}

.elementor-17 .elementor-element.elementor-element-c116855 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
    margin-bottom: 0px;
}

.elementor-17 .elementor-element.elementor-element-c116855 > .elementor-element-populated {
    padding: 0px 0px 0px 0px;
}

.elementor-17 .elementor-element.elementor-element-aa6275c .news___letter {
    padding: 0px 20px 0px 70px;
}

@media(min-width: 768px) {
    .elementor-17 .elementor-element.elementor-element-3fe12be {
        width:44%;
    }

    .elementor-17 .elementor-element.elementor-element-888e5c3 {
        width: 11.331%;
    }

    .elementor-17 .elementor-element.elementor-element-742ea6d {
        width: 44%;
    }

    .elementor-17 .elementor-element.elementor-element-5c9d442 {
        width: 33.3333%;
    }

    .elementor-17 .elementor-element.elementor-element-cda7693 {
        width: 66.667%;
    }

    .elementor-17 .elementor-element.elementor-element-62cef9b {
        width: 33.3333333333%;
    }

    .elementor-17 .elementor-element.elementor-element-e48d272 {
        width: 66.667%;
    }

    .elementor-17 .elementor-element.elementor-element-22c36a6 {
        width: 50%;
    }

    .elementor-17 .elementor-element.elementor-element-a24e256 {
        width: 50%;
    }

    .elementor-17 .elementor-element.elementor-element-e47c146 {
        width: 52%;
    }

    .elementor-17 .elementor-element.elementor-element-c116855 {
        width: 48%;
    }
}

@media(max-width: 1024px) {
    .elementor-17 .elementor-element.elementor-element-be3820b > .elementor-element-populated {
        padding:0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-11d9846 .sec-title {
        padding: 0px 0px 62px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-5f1833b {
        padding: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-ea09249 > .elementor-element-populated {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-fc6932d > .elementor-element-populated {
        padding: 70px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-6cfea95 > .elementor-widget-container {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-76de630 > .elementor-widget-container {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-67b1e5c > .elementor-widget-container {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-b4469d7 > .elementor-widget-container {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-f1817ad > .elementor-widget-container {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-7c2b8a4 > .elementor-widget-container {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-428b013 > .elementor-widget-container {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-ce33ef2 > .elementor-widget-container {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-3f622ea > .elementor-element-populated {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-f4408b0 .sec-title {
        padding: 0px 0px 62px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-f4408b0 .sec-title h2 {
        font-size: 40px;
    }

    .elementor-17 .elementor-element.elementor-element-f4408b0 .sec-title p {
        padding: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-178a4b0 {
        padding: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-3fe12be > .elementor-element-populated {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-888e5c3 > .elementor-element-populated {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-742ea6d > .elementor-element-populated {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-5c9d442 > .elementor-element-populated {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-40ce822 .sec-title {
        margin: 0px 0px 50px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-cda7693 > .elementor-element-populated {
        padding: 70px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-1fbf49a > .elementor-element-populated {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-feceb45 > .elementor-element-populated {
        padding: 0px 30px 0px 45px;
    }

    .elementor-17 .elementor-element.elementor-element-347e8a0 .yt-btn {
        text-align: left;
    }

    .elementor-17 .elementor-element.elementor-element-1f4c7c3 > .elementor-element-populated {
        padding: 30px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-b182653 > .elementor-widget-container {
        margin: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-839e315 > .elementor-element-populated {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-62cef9b > .elementor-element-populated {
        margin: 0px 0px 0px 0px;
        --e-column-margin-right: 0px;
        --e-column-margin-left: 0px;
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-5ed9fd0 .sec-title p {
        padding: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-2f14862 .chirokind-btn {
        padding: 0px 0px 30px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-2f14862 > .elementor-widget-container {
        margin: 10px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-e48d272 > .elementor-element-populated {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-a24e256 > .elementor-element-populated {
        padding: 30px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-e47c146 > .elementor-element-populated {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-8b93dc0 > .elementor-widget-container {
        margin: 0px 0px 20px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-c116855 > .elementor-element-populated {
        padding: 0px 30px 0px 30px;
    }

    .elementor-17 .elementor-element.elementor-element-aa6275c .news___letter {
        padding: 0px 0px 0px 0px;
    }
}

@media(max-width: 767px) {
    .elementor-17 .elementor-element.elementor-element-a0cf146 .main-slider .main-slider-content .te-title h2 {
        font-size:30px;
    }

    .elementor-17 .elementor-element.elementor-element-6aa2f9d > .elementor-container {
        max-width: 540px;
    }

    .elementor-17 .elementor-element.elementor-element-be3820b > .elementor-element-populated {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-11d9846 .sec-title {
        padding: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-11d9846 .sec-title h2 {
        font-size: 35px;
    }

    .elementor-17 .elementor-element.elementor-element-2c90ceb > .elementor-container {
        max-width: 540px;
    }

    .elementor-17 .elementor-element.elementor-element-aa781b2 > .elementor-element-populated {
        padding: 70px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-5f1833b > .elementor-container {
        max-width: 540px;
    }

    .elementor-17 .elementor-element.elementor-element-5f1833b {
        padding: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-ea09249 > .elementor-element-populated {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-fc6932d > .elementor-element-populated {
        margin: 0px 0px 0px 0px;
        --e-column-margin-right: 0px;
        --e-column-margin-left: 0px;
        padding: 70px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-6cfea95 .sec-title h2 {
        font-size: 30px;
    }

    .elementor-17 .elementor-element.elementor-element-6cfea95 .sec-title p {
        padding: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-6cfea95 > .elementor-widget-container {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-76de630 > .elementor-widget-container {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-67b1e5c > .elementor-widget-container {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-b4469d7 > .elementor-widget-container {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-b4469d7 {
        --container-widget-width: 100%;
        --container-widget-flex-grow: 0;
        width: var( --container-widget-width, 100% );
        max-width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-f1817ad > .elementor-widget-container {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-f1817ad {
        --container-widget-width: 100%;
        --container-widget-flex-grow: 0;
        width: var( --container-widget-width, 100% );
        max-width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-7c2b8a4 > .elementor-widget-container {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-7c2b8a4 {
        --container-widget-width: 100%;
        --container-widget-flex-grow: 0;
        width: var( --container-widget-width, 100% );
        max-width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-428b013 > .elementor-widget-container {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-428b013 {
        --container-widget-width: 100%;
        --container-widget-flex-grow: 0;
        width: var( --container-widget-width, 100% );
        max-width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-ce33ef2 > .elementor-widget-container {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-f4408b0 .sec-title {
        padding: 0px 0px 62px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-f4408b0 .sec-title h2 {
        font-size: 30px;
    }

    .elementor-17 .elementor-element.elementor-element-178a4b0 {
        padding: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-3fe12be > .elementor-element-populated {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-742ea6d > .elementor-element-populated {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-c022e9e > .elementor-container {
        max-width: 540px;
    }

    .elementor-17 .elementor-element.elementor-element-5c9d442 > .elementor-element-populated {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-40ce822 .sec-title h2 {
        font-size: 30px;
    }

    .elementor-17 .elementor-element.elementor-element-cda7693 > .elementor-element-populated {
        padding: 70px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-8490139 > .elementor-container {
        max-width: 540px;
    }

    .elementor-17 .elementor-element.elementor-element-1fbf49a > .elementor-element-populated {
        padding: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-ca5c52a .sec-title h2 {
        padding: 20px 0px 0px 0px;
        font-size: 30px;
    }

    .elementor-17 .elementor-element.elementor-element-feceb45 > .elementor-element-populated {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-347e8a0 > .elementor-widget-container {
        padding: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-327b39f > .elementor-container {
        max-width: 540px;
    }

    .elementor-17 .elementor-element.elementor-element-1f4c7c3 > .elementor-element-populated {
        padding: 20px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-9f89286 > .elementor-container {
        max-width: 540px;
    }

    .elementor-17 .elementor-element.elementor-element-839e315 > .elementor-element-populated {
        padding: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-beef71b > .elementor-container {
        max-width: 540px;
    }

    .elementor-17 .elementor-element.elementor-element-62cef9b > .elementor-element-populated {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-5ed9fd0 .sec-title h2 {
        font-size: 30px;
    }

    .elementor-17 .elementor-element.elementor-element-e48d272 > .elementor-element-populated {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-6c7c65f > .elementor-container {
        max-width: 540px;
    }

    .elementor-17 .elementor-element.elementor-element-e47c146 > .elementor-element-populated {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-8b93dc0 .sec-title h2 {
        padding: 30px 0px 0px 0px;
        font-size: 30px;
    }

    .elementor-17 .elementor-element.elementor-element-c116855 > .elementor-element-populated {
        padding: 0px 15px 0px 15px;
    }

    .elementor-17 .elementor-element.elementor-element-aa6275c .news___letter {
        margin: -20px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-17 .elementor-element.elementor-element-aa6275c > .elementor-widget-container {
        padding: 30px 0px 0px 0px;
    }
}

@media(max-width: 1024px) and (min-width:768px) {
    .elementor-17 .elementor-element.elementor-element-be3820b {
        width:100%;
    }

    .elementor-17 .elementor-element.elementor-element-ea09249 {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-fc6932d {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-3f622ea {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-3fe12be {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-888e5c3 {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-742ea6d {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-5c9d442 {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-cda7693 {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-1fbf49a {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-feceb45 {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-1f4c7c3 {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-62cef9b {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-e48d272 {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-22c36a6 {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-a24e256 {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-e47c146 {
        width: 100%;
    }

    .elementor-17 .elementor-element.elementor-element-c116855 {
        width: 100%;
    }
}

@media(min-width: 1025px) {
    .elementor-17 .elementor-element.elementor-element-de65c3b > .elementor-background-overlay {
        background-attachment:fixed;
    }
}

</style>

    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-819981b elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="819981b"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-155ac7d" data-id="155ac7d" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a0cf146 elementor-widget elementor-widget-chirokind_swiper_slider" data-id="a0cf146" data-element_type="widget" data-widget_type="chirokind_swiper_slider.default">
                        <div class="elementor-widget-container">
                            <!--Main Slider Start-->
                            <section class="main-slider main-slider-style2" id="banner">
                                <div class="main-slider-style1__inner">
                                    <div
                                        class="swiper-container thm-swiper__slider swiper-container-fade swiper-container-initialized swiper-container-horizontal"
                                        data-swiper-options='{"slidesPerView": 1, "loop": 1, "effect": "fade", "speed": 2000, "spaceBetween": 1, "pagination": {"el": "#main-slider-pagination", "type": "bullets", "clickable": true}, "navigation": {"nextEl": "#main-slider__swiper-button-next", "prevEl": "#main-slider__swiper-button-prev"}, "autoplay": {"delay": 8000}}'
                                    >
                                        <div class="swiper-wrapper" style="transition-duration: 0ms;">
                                            <div
                                                class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                                data-swiper-slide-index="2"
                                                style="width: 1548px; transition-duration: 0ms; opacity: 1; transform: translate3d(0px, 0px, 0px);"
                                            >
                                                <div class="image-layer" style="background-image: url(https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/slide-v2-3.jpg);"></div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="main-slider-content">
                                                                <div class="main-slider-content__inner">
                                                                    <div class="big-title-box te-title">
                                                                        <h2>
                                                                            Release the pain<br />
                                                                            feel good again
                                                                        </h2>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>
                                                                            I access to high levels of care that bring about real and long lasting <br />
                                                                            improvements to your spinal health and well-being.
                                                                        </p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one chirokind-btn1" href="https://wp1.themevibrant.com/newwp/chirokind/appointment/">
                                                                            <span class="txt"> request an appointment </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Start Single Swiper Slide-->
                                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" style="width: 1548px; transition-duration: 0ms; opacity: 1; transform: translate3d(-1548px, 0px, 0px);">
                                                <div class="image-layer" style="background-image: url(https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/slide-v2-1.jpg);"></div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="main-slider-content">
                                                                <div class="main-slider-content__inner">
                                                                    <div class="big-title-box te-title">
                                                                        <h2>
                                                                            Professtional<br />
                                                                            Physiotherapy
                                                                        </h2>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>
                                                                            I access to high levels of care that bring about real and long lasting <br />
                                                                            improvements to your spinal health and well-being.
                                                                        </p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one chirokind-btn1" href="https://wp1.themevibrant.com/newwp/chirokind/appointment/">
                                                                            <span class="txt"> request an appointment </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Single Swiper Slide-->
                                            <!--Start Single Swiper Slide-->
                                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 1548px; transition-duration: 0ms; opacity: 1; transform: translate3d(-3096px, 0px, 0px);">
                                                <div class="image-layer" style="background-image: url(https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/slide-v2-2.jpg);"></div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="main-slider-content">
                                                                <div class="main-slider-content__inner">
                                                                    <div class="big-title-box te-title">
                                                                        <h2>
                                                                            Best Chiropractic<br />
                                                                            Clinic for Relax
                                                                        </h2>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>
                                                                            Chiropractic care is the practice of to of physical ailments, <br />
                                                                            including muscle strain back pain, and more is the practice.
                                                                        </p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one chirokind-btn1" href="https://wp1.themevibrant.com/newwp/chirokind/appointment/">
                                                                            <span class="txt"> request an appointment </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Single Swiper Slide-->
                                            <!--Start Single Swiper Slide-->
                                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 1548px; transition-duration: 0ms; opacity: 0; transform: translate3d(-4644px, 0px, 0px);">
                                                <div class="image-layer" style="background-image: url(https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/slide-v2-3.jpg);"></div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="main-slider-content">
                                                                <div class="main-slider-content__inner">
                                                                    <div class="big-title-box te-title">
                                                                        <h2>
                                                                            Release the pain<br />
                                                                            feel good again
                                                                        </h2>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>
                                                                            I access to high levels of care that bring about real and long lasting <br />
                                                                            improvements to your spinal health and well-being.
                                                                        </p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one chirokind-btn1" href="https://wp1.themevibrant.com/newwp/chirokind/appointment/">
                                                                            <span class="txt"> request an appointment </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Single Swiper Slide-->
                                            <div
                                                class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                                data-swiper-slide-index="0"
                                                style="width: 1548px; transition-duration: 0ms; opacity: 0; transform: translate3d(-6192px, 0px, 0px);"
                                            >
                                                <div class="image-layer" style="background-image: url(https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/slide-v2-1.jpg);"></div>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="main-slider-content">
                                                                <div class="main-slider-content__inner">
                                                                    <div class="big-title-box te-title">
                                                                        <h2>
                                                                            Professtional<br />
                                                                            Physiotherapy
                                                                        </h2>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>
                                                                            I access to high levels of care that bring about real and long lasting <br />
                                                                            improvements to your spinal health and well-being.
                                                                        </p>
                                                                    </div>
                                                                    <div class="btns-box">
                                                                        <a class="btn-one chirokind-btn1" href="https://wp1.themevibrant.com/newwp/chirokind/appointment/">
                                                                            <span class="txt"> request an appointment </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- If we need navigation buttons -->
                                        <div class="main-slider__nav">
                                            <div class="swiper-button-prev" id="main-slider__swiper-button-next" tabindex="0" role="button" aria-label="Next slide">
                                                <i class="icon icon-right"></i>
                                            </div>
                                            <div class="swiper-button-next" id="main-slider__swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">
                                                <i class="icon icon-right1"></i>
                                            </div>
                                        </div>

                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                </div>
                            </section>
                            <!--Main Slider End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-d27860f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="d27860f"
        data-element_type="section"
        data-settings='{"background_background":"gradient"}'
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8f69d77" data-id="8f69d77" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-6aa2f9d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="6aa2f9d"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-be3820b" data-id="be3820b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-11d9846 elementor-widget elementor-widget-chirokind_hero_title"
                                        data-id="11d9846"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_hero_title.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="sec-title withtext text-center">
                                                <div class="sub-title center">
                                                    <div class="border-left subtitle-border"></div>
                                                    <h5 class="te-subtitle">our treatments</h5>
                                                    <div class="border-right subtitle-border"></div>
                                                </div>
                                                <h2 class="te-title chirokind-size-default">What We Do For Our Patients</h2>
                                                <p>
                                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                                                    quia dolor sit amet, consectetur, adipisci velit.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-2c90ceb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="2c90ceb"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-aa781b2" data-id="aa781b2" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-21d67f2 elementor-widget elementor-widget-chirokind_service_carousel"
                                        data-id="21d67f2"
                                        data-element_type="widget"
                                        data-settings='{"chirokind_layout_margin":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_margin_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_margin_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true}}'
                                        data-widget_type="chirokind_service_carousel.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <!--Start Service Style2-->
                                            <section class="service-style2 te-service " id="service">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div
                                                                class="owl-carousel owl-theme thm-owl__carousel service-style2-carousel owl-nav-style-one owl-nav-none owl-loaded owl-drag"
                                                                data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 2500,
                        "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow1\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 2
                            },
                            "992": {
                                "items": 2
                            },
                            "1200": {
                                "items": 4                                    }
                        }
                    }'
                                                            >
                                                                <!--Start Single Service Style2-->

                                                                <!--End Single Service Style2-->
                                                                <!--Start Single Service Style2-->

                                                                <!--End Single Service Style2-->
                                                                <!--Start Single Service Style2-->

                                                                <!--End Single Service Style2-->
                                                                <!--Start Single Service Style2-->

                                                                <!--End Single Service Style2-->

                                                                <div class="owl-stage-outer">
                                                                    <div class="owl-stage" style="transform: translate3d(-2100px, 0px, 0px); transition: all 0.5s ease 0s; width: 3600px;">
                                                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                                                            <div class="single-service-style2 service-bg">
                                                                                <div class="icon-box">
                                                                                    <span class="icon-physical-therapy"></span>
                                                                                    <div class="round-box"></div>
                                                                                </div>
                                                                                <div class="town-service-title">
                                                                                    <h3><a href="https://wp1.themevibrant.com/newwp/chirokind/service/physio-therapy/">Physio Therapy</a></h3>
                                                                                </div>
                                                                                <div class="btn-box te-btn">
                                                                                    <a href="https://wp1.themevibrant.com/newwp/chirokind/service/physio-therapy/">
                                                                                        read more
                                                                                        <span class="icon-right1"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                                                            <div class="single-service-style2 service-bg">
                                                                                <div class="icon-box">
                                                                                    <span class="icon-injury"></span>
                                                                                    <div class="round-box"></div>
                                                                                </div>
                                                                                <div class="town-service-title">
                                                                                    <h3><a href="https://wp1.themevibrant.com/newwp/chirokind/service/massage-therapy/">Massage Therapy</a></h3>
                                                                                </div>
                                                                                <div class="btn-box te-btn">
                                                                                    <a href="https://wp1.themevibrant.com/newwp/chirokind/service/massage-therapy/">
                                                                                        read more
                                                                                        <span class="icon-right1"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                                                            <div class="single-service-style2 service-bg">
                                                                                <div class="icon-box">
                                                                                    <span class="icon-massage"></span>
                                                                                    <div class="round-box"></div>
                                                                                </div>
                                                                                <div class="town-service-title">
                                                                                    <h3><a href="https://wp1.themevibrant.com/newwp/chirokind/service/chiropratic-therapy/">Chirotic Therapy</a></h3>
                                                                                </div>
                                                                                <div class="btn-box te-btn">
                                                                                    <a href="https://wp1.themevibrant.com/newwp/chirokind/service/chiropratic-therapy/">
                                                                                        read more
                                                                                        <span class="icon-right1"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                                                            <div class="single-service-style2 service-bg">
                                                                                <div class="icon-box">
                                                                                    <span class="icon-wrist"></span>
                                                                                    <div class="round-box"></div>
                                                                                </div>
                                                                                <div class="town-service-title">
                                                                                    <h3><a href="https://wp1.themevibrant.com/newwp/chirokind/service/sport-injury/">Sport Injury</a></h3>
                                                                                </div>
                                                                                <div class="btn-box te-btn">
                                                                                    <a href="https://wp1.themevibrant.com/newwp/chirokind/service/sport-injury/">
                                                                                        read more
                                                                                        <span class="icon-right1"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="owl-item" style="width: 270px; margin-right: 30px;">
                                                                            <div class="single-service-style2 service-bg">
                                                                                <div class="icon-box">
                                                                                    <span class="icon-physical-therapy"></span>
                                                                                    <div class="round-box"></div>
                                                                                </div>
                                                                                <div class="town-service-title">
                                                                                    <h3><a href="https://wp1.themevibrant.com/newwp/chirokind/service/physio-therapy/">Physio Therapy</a></h3>
                                                                                </div>
                                                                                <div class="btn-box te-btn">
                                                                                    <a href="https://wp1.themevibrant.com/newwp/chirokind/service/physio-therapy/">
                                                                                        read more
                                                                                        <span class="icon-right1"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="owl-item" style="width: 270px; margin-right: 30px;">
                                                                            <div class="single-service-style2 service-bg">
                                                                                <div class="icon-box">
                                                                                    <span class="icon-injury"></span>
                                                                                    <div class="round-box"></div>
                                                                                </div>
                                                                                <div class="town-service-title">
                                                                                    <h3><a href="https://wp1.themevibrant.com/newwp/chirokind/service/massage-therapy/">Massage Therapy</a></h3>
                                                                                </div>
                                                                                <div class="btn-box te-btn">
                                                                                    <a href="https://wp1.themevibrant.com/newwp/chirokind/service/massage-therapy/">
                                                                                        read more
                                                                                        <span class="icon-right1"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="owl-item" style="width: 270px; margin-right: 30px;">
                                                                            <div class="single-service-style2 service-bg">
                                                                                <div class="icon-box">
                                                                                    <span class="icon-massage"></span>
                                                                                    <div class="round-box"></div>
                                                                                </div>
                                                                                <div class="town-service-title">
                                                                                    <h3><a href="https://wp1.themevibrant.com/newwp/chirokind/service/chiropratic-therapy/">Chirotic Therapy</a></h3>
                                                                                </div>
                                                                                <div class="btn-box te-btn">
                                                                                    <a href="https://wp1.themevibrant.com/newwp/chirokind/service/chiropratic-therapy/">
                                                                                        read more
                                                                                        <span class="icon-right1"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="owl-item active" style="width: 270px; margin-right: 30px;">
                                                                            <div class="single-service-style2 service-bg">
                                                                                <div class="icon-box">
                                                                                    <span class="icon-wrist"></span>
                                                                                    <div class="round-box"></div>
                                                                                </div>
                                                                                <div class="town-service-title">
                                                                                    <h3><a href="https://wp1.themevibrant.com/newwp/chirokind/service/sport-injury/">Sport Injury</a></h3>
                                                                                </div>
                                                                                <div class="btn-box te-btn">
                                                                                    <a href="https://wp1.themevibrant.com/newwp/chirokind/service/sport-injury/">
                                                                                        read more
                                                                                        <span class="icon-right1"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="owl-item cloned active" style="width: 270px; margin-right: 30px;">
                                                                            <div class="single-service-style2 service-bg">
                                                                                <div class="icon-box">
                                                                                    <span class="icon-physical-therapy"></span>
                                                                                    <div class="round-box"></div>
                                                                                </div>
                                                                                <div class="town-service-title">
                                                                                    <h3><a href="https://wp1.themevibrant.com/newwp/chirokind/service/physio-therapy/">Physio Therapy</a></h3>
                                                                                </div>
                                                                                <div class="btn-box te-btn">
                                                                                    <a href="https://wp1.themevibrant.com/newwp/chirokind/service/physio-therapy/">
                                                                                        read more
                                                                                        <span class="icon-right1"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="owl-item cloned active" style="width: 270px; margin-right: 30px;">
                                                                            <div class="single-service-style2 service-bg">
                                                                                <div class="icon-box">
                                                                                    <span class="icon-injury"></span>
                                                                                    <div class="round-box"></div>
                                                                                </div>
                                                                                <div class="town-service-title">
                                                                                    <h3><a href="https://wp1.themevibrant.com/newwp/chirokind/service/massage-therapy/">Massage Therapy</a></h3>
                                                                                </div>
                                                                                <div class="btn-box te-btn">
                                                                                    <a href="https://wp1.themevibrant.com/newwp/chirokind/service/massage-therapy/">
                                                                                        read more
                                                                                        <span class="icon-right1"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="owl-item cloned active" style="width: 270px; margin-right: 30px;">
                                                                            <div class="single-service-style2 service-bg">
                                                                                <div class="icon-box">
                                                                                    <span class="icon-massage"></span>
                                                                                    <div class="round-box"></div>
                                                                                </div>
                                                                                <div class="town-service-title">
                                                                                    <h3><a href="https://wp1.themevibrant.com/newwp/chirokind/service/chiropratic-therapy/">Chirotic Therapy</a></h3>
                                                                                </div>
                                                                                <div class="btn-box te-btn">
                                                                                    <a href="https://wp1.themevibrant.com/newwp/chirokind/service/chiropratic-therapy/">
                                                                                        read more
                                                                                        <span class="icon-right1"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="owl-item cloned" style="width: 270px; margin-right: 30px;">
                                                                            <div class="single-service-style2 service-bg">
                                                                                <div class="icon-box">
                                                                                    <span class="icon-wrist"></span>
                                                                                    <div class="round-box"></div>
                                                                                </div>
                                                                                <div class="town-service-title">
                                                                                    <h3><a href="https://wp1.themevibrant.com/newwp/chirokind/service/sport-injury/">Sport Injury</a></h3>
                                                                                </div>
                                                                                <div class="btn-box te-btn">
                                                                                    <a href="https://wp1.themevibrant.com/newwp/chirokind/service/sport-injury/">
                                                                                        read more
                                                                                        <span class="icon-right1"></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <!--End Service Style2-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-7f15c46 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="7f15c46"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c383010" data-id="c383010" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-5f1833b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="5f1833b"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ea09249" data-id="ea09249" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-dd838cd elementor-widget elementor-widget-chirokind_image_counter"
                                        data-id="dd838cd"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_image_counter.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="about-style2__img" id="about">
                                                <div class="inner">
                                                    <img decoding="async" src="https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/about-style2-img-1.jpg" alt="Awesome Image" />
                                                </div>
                                                <div class="satisfied-patients-box js-tilt">
                                                    <div class="icon">
                                                        <i class="icon-satisfaction"></i>
                                                    </div>
                                                    <div class="counting">
                                                        <h2 class="odometer odometer-auto-theme" data-count="2500">
                                                            <div class="odometer-inside">
                                                                <span class="odometer-digit">
                                                                    <span class="odometer-digit-spacer">8</span>
                                                                    <span class="odometer-digit-inner">
                                                                        <span class="odometer-ribbon">
                                                                            <span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                <span class="odometer-formatting-mark">,</span>
                                                                <span class="odometer-digit">
                                                                    <span class="odometer-digit-spacer">8</span>
                                                                    <span class="odometer-digit-inner">
                                                                        <span class="odometer-ribbon">
                                                                            <span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                <span class="odometer-digit">
                                                                    <span class="odometer-digit-spacer">8</span>
                                                                    <span class="odometer-digit-inner">
                                                                        <span class="odometer-ribbon">
                                                                            <span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                <span class="odometer-digit">
                                                                    <span class="odometer-digit-spacer">8</span>
                                                                    <span class="odometer-digit-inner">
                                                                        <span class="odometer-ribbon">
                                                                            <span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </h2>
                                                        <span class="icon-plus plus"></span>
                                                    </div>
                                                    <p>
                                                        Satisfied<br />
                                                        Patients
                                                    </p>
                                                    <div class="js-tilt-glare" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden;">
                                                        <div
                                                            class="js-tilt-glare-inner"
                                                            style="
                                                                position: absolute;
                                                                top: 50%;
                                                                left: 50%;
                                                                pointer-events: none;
                                                                background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%);
                                                                width: 400px;
                                                                height: 400px;
                                                                transform: rotate(180deg) translate(-50%, -50%);
                                                                transform-origin: 0% 0%;
                                                                opacity: 0;
                                                            "
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-fc6932d" data-id="fc6932d" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-6cfea95 elementor-widget elementor-widget-chirokind_hero_title"
                                        data-id="6cfea95"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_hero_title.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="sec-title">
                                                <div class="sub-title">
                                                    <div class="border-left subtitle-border"></div>
                                                    <h5 class="te-subtitle">about Chirokind</h5>
                                                </div>
                                                <h2 class="te-title chirokind-size-default">
                                                    We Are Best Physical<br />
                                                    Therapy Clinic
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-76de630 elementor-widget elementor-widget-text-editor" data-id="76de630" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.21.0 - 18-04-2024 */
                                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                    background-color: #69727d;
                                                    color: #fff;
                                                }
                                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                    color: #69727d;
                                                    border: 3px solid;
                                                    background-color: transparent;
                                                }
                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                    margin-top: 8px;
                                                }
                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                    width: 1em;
                                                    height: 1em;
                                                }
                                                .elementor-widget-text-editor .elementor-drop-cap {
                                                    float: left;
                                                    text-align: center;
                                                    line-height: 1;
                                                    font-size: 50px;
                                                }
                                                .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                    display: inline-block;
                                                }
                                            </style>
                                            Release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing.
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-67b1e5c elementor-widget elementor-widget-text-editor" data-id="67b1e5c" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy.
                                            Various versions have evolved over the years, sometimes by accident, sometimes on purpose.
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-b4469d7 elementor-widget__width-initial elementor-widget elementor-widget-chirokind_feature_list_widget"
                                        data-id="b4469d7"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_feature_list_widget.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="about-style2__content p-0 m-0">
                                                <div class="list-item te-list">
                                                    <ul>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-checkmark"></span>
                                                            </div>
                                                            100% Satisfaction
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-f1817ad elementor-widget__width-initial elementor-widget elementor-widget-chirokind_feature_list_widget"
                                        data-id="f1817ad"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_feature_list_widget.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="about-style2__content p-0 m-0">
                                                <div class="list-item te-list">
                                                    <ul>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-checkmark"></span>
                                                            </div>
                                                            Comfortable Atmosphere
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-7c2b8a4 elementor-widget__width-initial elementor-widget elementor-widget-chirokind_feature_list_widget"
                                        data-id="7c2b8a4"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_feature_list_widget.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="about-style2__content p-0 m-0">
                                                <div class="list-item te-list">
                                                    <ul>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-checkmark"></span>
                                                            </div>
                                                            Flexible and Cost-Effective
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-428b013 elementor-widget__width-initial elementor-widget elementor-widget-chirokind_feature_list_widget"
                                        data-id="428b013"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_feature_list_widget.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="about-style2__content p-0 m-0">
                                                <div class="list-item te-list">
                                                    <ul>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-checkmark"></span>
                                                            </div>
                                                            Trained Therapists
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-ce33ef2 elementor-widget elementor-widget-chirokind_button"
                                        data-id="ce33ef2"
                                        data-element_type="widget"
                                        data-settings='{"btn_margin":{"unit":"px","top":"45","right":"0","bottom":"0","left":"0","isLinked":false},"btn_margin_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true}}'
                                        data-widget_type="chirokind_button.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="btns-box yt-btn">
                                                <a class="btn-one chirokind-btn" href="https://wp1.themevibrant.com/newwp/chirokind/about-us/" target='"_blank"' rel='"nofollow"'>
                                                    <span class="txt"> read more </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-b91b167 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="b91b167"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c37e3a8" data-id="c37e3a8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-f2d6458 elementor-widget elementor-widget-chirokind_our_funfacts" data-id="f2d6458" data-element_type="widget" data-widget_type="chirokind_our_funfacts.default">
                        <div class="elementor-widget-container">
                            <!--Start Fact Counter Style2-->
                            <section class="fact-counter-style2 te-funfacts">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="fact-counter-style2__content">
                                                <ul class="clearfix">
                                                    <!--Start Single Fact Counter-->
                                                    <li class="single-fact-counter">
                                                        <div class="icon">
                                                            <i class="icon-medical"></i>
                                                        </div>
                                                        <div class="outer-box">
                                                            <div class="count-outer count-box counted">
                                                                <span class="count-text" data-speed="3000" data-stop="1700">1700</span>
                                                                <i class="icon-plus-sign"></i>
                                                            </div>
                                                            <div class="title">
                                                                <h6>Happy Patients</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!--End Single Fact Counter-->
                                                    <!--Start Single Fact Counter-->
                                                    <li class="single-fact-counter">
                                                        <div class="icon">
                                                            <i class="icon-satisfaction"></i>
                                                        </div>
                                                        <div class="outer-box">
                                                            <div class="count-outer count-box counted">
                                                                <span class="count-text" data-speed="3000" data-stop="100">100</span>
                                                                <i class="icon-percentage-discount"></i>
                                                            </div>
                                                            <div class="title">
                                                                <h6>Satisfaction Guarantee</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!--End Single Fact Counter-->
                                                    <!--Start Single Fact Counter-->
                                                    <li class="single-fact-counter">
                                                        <div class="icon">
                                                            <i class="icon-physiotherapist"></i>
                                                        </div>
                                                        <div class="outer-box">
                                                            <div class="count-outer count-box counted">
                                                                <span class="count-text" data-speed="3000" data-stop="27">27</span>
                                                                <i class="icon-plus"></i>
                                                            </div>
                                                            <div class="title">
                                                                <h6>Therapist &amp; Staff</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!--End Single Fact Counter-->
                                                    <!--Start Single Fact Counter-->
                                                    <li class="single-fact-counter">
                                                        <div class="icon">
                                                            <i class="icon-learning"></i>
                                                        </div>
                                                        <div class="outer-box">
                                                            <div class="count-outer count-box counted">
                                                                <span class="count-text" data-speed="3000" data-stop="10">10</span>
                                                                <i class="icon-plus"></i>
                                                            </div>
                                                            <div class="title">
                                                                <h6>Years Experience</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <!--End Single Fact Counter-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--End Fact Counter Style2-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-de65c3b elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="de65c3b"
        data-element_type="section"
        data-settings='{"background_background":"gradient"}'
    >
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0ff8e76" data-id="0ff8e76" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-07f09a1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="07f09a1"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3f622ea" data-id="3f622ea" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-f4408b0 elementor-widget elementor-widget-chirokind_hero_title"
                                        data-id="f4408b0"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_hero_title.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="sec-title withtext text-center">
                                                <div class="sub-title center">
                                                    <div class="border-left subtitle-border"></div>
                                                    <h5 class="te-subtitle">why choose us</h5>
                                                    <div class="border-right subtitle-border"></div>
                                                </div>
                                                <h2 class="te-title chirokind-size-default">Great Reasons Make You Choose Us</h2>
                                                <p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-178a4b0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="178a4b0"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3fe12be" data-id="3fe12be" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-192ed31 elementor-widget elementor-widget-chirokind_feature_list_widget"
                                        data-id="192ed31"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_feature_list_widget.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="choose-style2__content te-list">
                                                <ul>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-check-mark"></span>
                                                        </div>
                                                        Advanced Physiotherapy Equipments.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-ec4fa04 elementor-widget elementor-widget-chirokind_feature_list_widget"
                                        data-id="ec4fa04"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_feature_list_widget.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="choose-style2__content te-list">
                                                <ul>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-check-mark"></span>
                                                        </div>
                                                        Advanced Manual Therapy
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-4c58449 elementor-widget elementor-widget-chirokind_feature_list_widget"
                                        data-id="4c58449"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_feature_list_widget.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="choose-style2__content te-list">
                                                <ul>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-check-mark"></span>
                                                        </div>
                                                        Certified Professional Therapists.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-888e5c3" data-id="888e5c3" data-element_type="column">
                                <div class="elementor-widget-wrap"></div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-742ea6d" data-id="742ea6d" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-edfdda7 elementor-widget elementor-widget-chirokind_feature_list_widget"
                                        data-id="edfdda7"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_feature_list_widget.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="choose-style2__content te-list">
                                                <ul>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-check-mark"></span>
                                                        </div>
                                                        Friendly And Kind Staff
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-f0eba8d elementor-widget elementor-widget-chirokind_feature_list_widget"
                                        data-id="f0eba8d"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_feature_list_widget.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="choose-style2__content te-list">
                                                <ul>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-check-mark"></span>
                                                        </div>
                                                        Affordable Prices And Guaranteed Healing
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-69add6e elementor-widget elementor-widget-chirokind_feature_list_widget"
                                        data-id="69add6e"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_feature_list_widget.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="choose-style2__content te-list">
                                                <ul>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="icon-check-mark"></span>
                                                        </div>
                                                        On Call Therapist Available For Home Visit
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-667a6da elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="667a6da"
        data-element_type="section"
        data-settings='{"background_background":"gradient"}'
    >
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bcf7c1b" data-id="bcf7c1b" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-c022e9e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="c022e9e"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5c9d442" data-id="5c9d442" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-40ce822 elementor-widget elementor-widget-chirokind_hero_title"
                                        data-id="40ce822"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_hero_title.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="sec-title">
                                                <div class="sub-title">
                                                    <div class="border-left subtitle-border"></div>
                                                    <h5 class="te-subtitle">Testimonials</h5>
                                                </div>
                                                <h2 class="te-title chirokind-size-default">What They’re Talking About Comapany?</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-cda7693" data-id="cda7693" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-059ce39 elementor-widget elementor-widget-chirokind_testimonials_carousel"
                                        data-id="059ce39"
                                        data-element_type="widget"
                                        data-settings='{"chirokind_layout_margin":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_margin_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_margin_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true}}'
                                        data-widget_type="chirokind_testimonials_carousel.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="testimonial-style1-content-box" id="testimonial">
                                                <div
                                                    class="owl-carousel owl-theme thm-owl__carousel testimonial-style2-carousel owl-nav-style-one owl-nav-none owl-loaded owl-drag"
                                                    data-owl-options='{
                "loop": true,
                "autoplay": true,
                "margin": 30,
                "nav": true,
                "dots": false,
                "smartSpeed": 500,
                "autoplayTimeout": 2500,
                "navText": ["<span class=\"left icon-right-arrow\"></span>","<span class=\"right icon-right-arrow1\"></span>"],
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "768": {
                        "items": 2
                    },
                    "992": {
                        "items": 2
                    },
                    "1200": {
                        "items": 2                            }
                }
            }'
                                                >
                                                    <!--Start Single testimonials Style1-->

                                                    <!--End Single testimonials Style1-->
                                                    <!--Start Single testimonials Style1-->

                                                    <!--End Single testimonials Style1-->

                                                    <div class="owl-stage-outer">
                                                        <div class="owl-stage" style="transform: translate3d(-1200px, 0px, 0px); transition: all 0.5s ease 0s; width: 2400px;">
                                                            <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                                                <div class="single-testimonials-style1">
                                                                    <div class="single-testimonials-style1__inner te-testimonial">
                                                                        <div class="quote-box te-quote">
                                                                            <span class="icon-quotation"></span>
                                                                        </div>
                                                                        <div class="text-box">
                                                                            <p class="te-text">
                                                                                Diam vulputate ut pharetra sit amet aliquam. Libero enim sed faucibus turpis. Sed viverra tellus in hac habitasse platea dictumst. Normal that has…
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="customer-info">
                                                                        <div class="img-box">
                                                                            <img
                                                                                decoding="async"
                                                                                width="70"
                                                                                height="70"
                                                                                src="https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v3-1.png"
                                                                                class="attachment-chirokind_70x70 size-chirokind_70x70 wp-post-image"
                                                                                alt=""
                                                                                srcset="
                                                                                    https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v3-1.png         115w,
                                                                                    https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v3-1-100x100.png 100w,
                                                                                    https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v3-1-95x95.png    95w
                                                                                "
                                                                                sizes="(max-width: 70px) 100vw, 70px"
                                                                            />
                                                                        </div>
                                                                        <div class="title-box">
                                                                            <h3 class="te-title">Peter Jack</h3>
                                                                            <span class="te-designation">Customer</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                                                <div class="single-testimonials-style1">
                                                                    <div class="single-testimonials-style1__inner te-testimonial">
                                                                        <div class="quote-box te-quote">
                                                                            <span class="icon-quotation"></span>
                                                                        </div>
                                                                        <div class="text-box">
                                                                            <p class="te-text">
                                                                                Normal that has evolved from gene ration X is on the runway heading towards a streamlined cloud solution. strategies to ensure proactive domination.…
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="customer-info">
                                                                        <div class="img-box">
                                                                            <img
                                                                                decoding="async"
                                                                                width="70"
                                                                                height="70"
                                                                                src="https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v2-2.jpg"
                                                                                class="attachment-chirokind_70x70 size-chirokind_70x70 wp-post-image"
                                                                                alt=""
                                                                            />
                                                                        </div>
                                                                        <div class="title-box">
                                                                            <h3 class="te-title">Laura Fenty</h3>
                                                                            <span class="te-designation">Customer</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item" style="width: 370px; margin-right: 30px;">
                                                                <div class="single-testimonials-style1">
                                                                    <div class="single-testimonials-style1__inner te-testimonial">
                                                                        <div class="quote-box te-quote">
                                                                            <span class="icon-quotation"></span>
                                                                        </div>
                                                                        <div class="text-box">
                                                                            <p class="te-text">
                                                                                Diam vulputate ut pharetra sit amet aliquam. Libero enim sed faucibus turpis. Sed viverra tellus in hac habitasse platea dictumst. Normal that has…
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="customer-info">
                                                                        <div class="img-box">
                                                                            <img
                                                                                decoding="async"
                                                                                width="70"
                                                                                height="70"
                                                                                src="https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v3-1.png"
                                                                                class="attachment-chirokind_70x70 size-chirokind_70x70 wp-post-image"
                                                                                alt=""
                                                                                srcset="
                                                                                    https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v3-1.png         115w,
                                                                                    https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v3-1-100x100.png 100w,
                                                                                    https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v3-1-95x95.png    95w
                                                                                "
                                                                                sizes="(max-width: 70px) 100vw, 70px"
                                                                            />
                                                                        </div>
                                                                        <div class="title-box">
                                                                            <h3 class="te-title">Peter Jack</h3>
                                                                            <span class="te-designation">Customer</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item active" style="width: 370px; margin-right: 30px;">
                                                                <div class="single-testimonials-style1">
                                                                    <div class="single-testimonials-style1__inner te-testimonial">
                                                                        <div class="quote-box te-quote">
                                                                            <span class="icon-quotation"></span>
                                                                        </div>
                                                                        <div class="text-box">
                                                                            <p class="te-text">
                                                                                Normal that has evolved from gene ration X is on the runway heading towards a streamlined cloud solution. strategies to ensure proactive domination.…
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="customer-info">
                                                                        <div class="img-box">
                                                                            <img
                                                                                decoding="async"
                                                                                width="70"
                                                                                height="70"
                                                                                src="https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v2-2.jpg"
                                                                                class="attachment-chirokind_70x70 size-chirokind_70x70 wp-post-image"
                                                                                alt=""
                                                                            />
                                                                        </div>
                                                                        <div class="title-box">
                                                                            <h3 class="te-title">Laura Fenty</h3>
                                                                            <span class="te-designation">Customer</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item cloned active" style="width: 370px; margin-right: 30px;">
                                                                <div class="single-testimonials-style1">
                                                                    <div class="single-testimonials-style1__inner te-testimonial">
                                                                        <div class="quote-box te-quote">
                                                                            <span class="icon-quotation"></span>
                                                                        </div>
                                                                        <div class="text-box">
                                                                            <p class="te-text">
                                                                                Diam vulputate ut pharetra sit amet aliquam. Libero enim sed faucibus turpis. Sed viverra tellus in hac habitasse platea dictumst. Normal that has…
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="customer-info">
                                                                        <div class="img-box">
                                                                            <img
                                                                                decoding="async"
                                                                                width="70"
                                                                                height="70"
                                                                                src="https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v3-1.png"
                                                                                class="attachment-chirokind_70x70 size-chirokind_70x70 wp-post-image"
                                                                                alt=""
                                                                                srcset="
                                                                                    https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v3-1.png         115w,
                                                                                    https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v3-1-100x100.png 100w,
                                                                                    https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v3-1-95x95.png    95w
                                                                                "
                                                                                sizes="(max-width: 70px) 100vw, 70px"
                                                                            />
                                                                        </div>
                                                                        <div class="title-box">
                                                                            <h3 class="te-title">Peter Jack</h3>
                                                                            <span class="te-designation">Customer</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">
                                                                <div class="single-testimonials-style1">
                                                                    <div class="single-testimonials-style1__inner te-testimonial">
                                                                        <div class="quote-box te-quote">
                                                                            <span class="icon-quotation"></span>
                                                                        </div>
                                                                        <div class="text-box">
                                                                            <p class="te-text">
                                                                                Normal that has evolved from gene ration X is on the runway heading towards a streamlined cloud solution. strategies to ensure proactive domination.…
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="customer-info">
                                                                        <div class="img-box">
                                                                            <img
                                                                                decoding="async"
                                                                                width="70"
                                                                                height="70"
                                                                                src="https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/testimonial-v2-2.jpg"
                                                                                class="attachment-chirokind_70x70 size-chirokind_70x70 wp-post-image"
                                                                                alt=""
                                                                            />
                                                                        </div>
                                                                        <div class="title-box">
                                                                            <h3 class="te-title">Laura Fenty</h3>
                                                                            <span class="te-designation">Customer</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-nav disabled">
                                                        <button type="button" role="presentation" class="owl-prev"><span class="left icon-right-arrow"></span></button>
                                                        <button type="button" role="presentation" class="owl-next"><span class="right icon-right-arrow1"></span></button>
                                                    </div>
                                                    <div class="owl-dots disabled"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-02208c2 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="02208c2"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4e94877" data-id="4e94877" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-8490139 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="8490139"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1fbf49a" data-id="1fbf49a" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-ca5c52a elementor-widget elementor-widget-chirokind_hero_title"
                                        data-id="ca5c52a"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_hero_title.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="sec-title">
                                                <div class="sub-title">
                                                    <div class="border-left subtitle-border"></div>
                                                    <h5 class="te-subtitle">dedicated team</h5>
                                                </div>
                                                <h2 class="te-title chirokind-size-default">Our Expert Therapists</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-feceb45" data-id="feceb45" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-347e8a0 elementor-widget elementor-widget-chirokind_button"
                                        data-id="347e8a0"
                                        data-element_type="widget"
                                        data-settings='{"btn_margin":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true}}'
                                        data-widget_type="chirokind_button.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="team-btn-item yt-btn">
                                                <div class="btn-box">
                                                    <a class="chirokind-btn" href="https://wp1.themevibrant.com/newwp/chirokind/our-therapists/" target='"_blank"' rel='"nofollow"'>
                                                        View all Therapists <span class="border-line"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-327b39f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="327b39f"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1f4c7c3" data-id="1f4c7c3" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-b182653 elementor-widget elementor-widget-text-editor" data-id="b182653" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                                            dolor sit amet, consectetur.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-9f89286 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="9f89286"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-839e315" data-id="839e315" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-599a988 elementor-widget elementor-widget-chirokind_team_grid"
                                        data-id="599a988"
                                        data-element_type="widget"
                                        data-settings='{"team_box_space":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"team_box_space_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"team_box_space_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"team_box_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"team_box_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"team_box_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"icon_box_space":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"icon_box_space_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"icon_box_space_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"icon_box_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"icon_box_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"icon_box_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true}}'
                                        data-widget_type="chirokind_team_grid.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <!--Start Team Style1-->
                                            <section class="team-style1 p-0 m-0" id="therapist">
                                                <div class="container">
                                                    <div class="row">
                                                        <!--Start Single Team Style1-->
                                                        <div class="col-xl-3 col-lg-6 col-md-12">
                                                            <div
                                                                class="single-team-style1 te-team wow fadeInUp animated"
                                                                data-wow-delay="100ms"
                                                                data-wow-duration="1500ms"
                                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;"
                                                            >
                                                                <div class="img-holder">
                                                                    <div class="inner">
                                                                        <img
                                                                            fetchpriority="high"
                                                                            decoding="async"
                                                                            width="270"
                                                                            height="284"
                                                                            src="https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/team-v1-1.jpg"
                                                                            class="attachment-chirokind_270x284 size-chirokind_270x284 wp-post-image"
                                                                            alt=""
                                                                        />
                                                                    </div>
                                                                    <!-- /.chef-thumb -->
                                                                    <div class="overlay-content">
                                                                        <div class="team-social-link">
                                                                            <ul class="clearfix">
                                                                                <li>
                                                                                    <a href="https://www.facebook.com/"><i class="icon-facebook-app-symbol"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://www.linkedin.com/"><i class="icon-linkedin"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://www.twitter.com/"><i class="icon-twitter"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://www.instagram.com/"><i class="icon-instagram"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="title-box text-center">
                                                                    <h3 class="te-title"><a href="https://wp1.themevibrant.com/newwp/chirokind/team/robert-joe/">Robert Joe</a></h3>
                                                                    <h5 class="te-designation">Chiropratic Therapist</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--End Single Team Style1-->
                                                        <!--Start Single Team Style1-->
                                                        <div class="col-xl-3 col-lg-6 col-md-12">
                                                            <div
                                                                class="single-team-style1 te-team wow fadeInUp animated"
                                                                data-wow-delay="100ms"
                                                                data-wow-duration="1500ms"
                                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;"
                                                            >
                                                                <div class="img-holder">
                                                                    <div class="inner">
                                                                        <img
                                                                            loading="lazy"
                                                                            decoding="async"
                                                                            width="270"
                                                                            height="284"
                                                                            src="https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/team-v1-2.jpg"
                                                                            class="attachment-chirokind_270x284 size-chirokind_270x284 wp-post-image"
                                                                            alt=""
                                                                        />
                                                                    </div>
                                                                    <!-- /.chef-thumb -->
                                                                    <div class="overlay-content">
                                                                        <div class="team-social-link">
                                                                            <ul class="clearfix">
                                                                                <li>
                                                                                    <a href="https://www.facebook.com/"><i class="icon-facebook-app-symbol"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://www.linkedin.com/"><i class="icon-linkedin"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://www.twitter.com/"><i class="icon-twitter"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://www.instagram.com/"><i class="icon-instagram"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="title-box text-center">
                                                                    <h3 class="te-title"><a href="https://wp1.themevibrant.com/newwp/chirokind/team/merry-joe/">Merry Joe</a></h3>
                                                                    <h5 class="te-designation">Message Therapist</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--End Single Team Style1-->
                                                        <!--Start Single Team Style1-->
                                                        <div class="col-xl-3 col-lg-6 col-md-12">
                                                            <div
                                                                class="single-team-style1 te-team wow fadeInUp animated"
                                                                data-wow-delay="100ms"
                                                                data-wow-duration="1500ms"
                                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;"
                                                            >
                                                                <div class="img-holder">
                                                                    <div class="inner">
                                                                        <img
                                                                            loading="lazy"
                                                                            decoding="async"
                                                                            width="270"
                                                                            height="284"
                                                                            src="https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/team-v1-3.jpg"
                                                                            class="attachment-chirokind_270x284 size-chirokind_270x284 wp-post-image"
                                                                            alt=""
                                                                        />
                                                                    </div>
                                                                    <!-- /.chef-thumb -->
                                                                    <div class="overlay-content">
                                                                        <div class="team-social-link">
                                                                            <ul class="clearfix">
                                                                                <li>
                                                                                    <a href="https://www.facebook.com/"><i class="icon-facebook-app-symbol"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://www.linkedin.com/"><i class="icon-linkedin"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://www.twitter.com/"><i class="icon-twitter"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://www.instagram.com/"><i class="icon-instagram"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="title-box text-center">
                                                                    <h3 class="te-title"><a href="https://wp1.themevibrant.com/newwp/chirokind/team/satlen-joe/">Satlen Joe</a></h3>
                                                                    <h5 class="te-designation">Back Pain Specilst</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--End Single Team Style1-->
                                                        <!--Start Single Team Style1-->
                                                        <div class="col-xl-3 col-lg-6 col-md-12">
                                                            <div
                                                                class="single-team-style1 te-team wow fadeInUp animated"
                                                                data-wow-delay="100ms"
                                                                data-wow-duration="1500ms"
                                                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;"
                                                            >
                                                                <div class="img-holder">
                                                                    <div class="inner">
                                                                        <img
                                                                            loading="lazy"
                                                                            decoding="async"
                                                                            width="270"
                                                                            height="284"
                                                                            src="https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/team-v1-4.jpg"
                                                                            class="attachment-chirokind_270x284 size-chirokind_270x284 wp-post-image"
                                                                            alt=""
                                                                        />
                                                                    </div>
                                                                    <!-- /.chef-thumb -->
                                                                    <div class="overlay-content">
                                                                        <div class="team-social-link">
                                                                            <ul class="clearfix">
                                                                                <li>
                                                                                    <a href="https://www.facebook.com/"><i class="icon-facebook-app-symbol"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://www.linkedin.com/"><i class="icon-linkedin"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://www.twitter.com/"><i class="icon-twitter"></i></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://www.instagram.com/"><i class="icon-instagram"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="title-box text-center">
                                                                    <h3 class="te-title"><a href="https://wp1.themevibrant.com/newwp/chirokind/team/john-doe/">John Doe</a></h3>
                                                                    <h5 class="te-designation">Chiropractic Therapist</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--End Single Team Style1-->
                                                    </div>
                                                </div>
                                            </section>
                                            <!--End Team Style1-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-ce76eee elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="ce76eee"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-92d2120" data-id="92d2120" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-d89d7bb elementor-widget elementor-widget-chirokind_call_to_action"
                        data-id="d89d7bb"
                        data-element_type="widget"
                        data-settings='{"btn_margin":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true}}'
                        data-widget_type="chirokind_call_to_action.default"
                    >
                        <div class="elementor-widget-container">
                            <!--Start slogan area-->
                            <section class="slogan-area cta-section">
                                <div class="slogan-area-bg" style="background-image: url(https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/slogan-area-bg.jpg);"></div>
                                <div class="container">
                                    <div class="slogan-content-box">
                                        <div class="inner-title">
                                            <div class="sub-title">
                                                <h5 class="te-subtitle">serving since 1992</h5>
                                                <div class="border-box"></div>
                                            </div>
                                            <h2 class="te-title">
                                                We Welcome you to give<br />
                                                chance to serve you
                                            </h2>
                                        </div>
                                        <div class="btns-box">
                                            <div class="left-btn">
                                                <a class="btn-one" href="https://wp1.themevibrant.com/newwp/chirokind/appointment/" target='"_blank"' rel='"nofollow"'>
                                                    <span class="txt"> get appointment </span>
                                                </a>
                                            </div>
                                            <div class="video-gallery-style2">
                                                <div
                                                    class="icon wow zoomIn animated animated"
                                                    data-wow-delay="300ms"
                                                    data-wow-duration="1500ms"
                                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: zoomIn;"
                                                >
                                                    <div class="border-round"></div>
                                                    <a class="video-popup" title="Video Gallery" href="https://www.youtube.com/watch?v=06dV9txztKY">
                                                        <span class="icon-play"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--End slogan area-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-63e7d1a elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="63e7d1a"
        data-element_type="section"
    >
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0626071" data-id="0626071" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-beef71b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="beef71b"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-62cef9b" data-id="62cef9b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-5ed9fd0 elementor-widget elementor-widget-chirokind_hero_title"
                                        data-id="5ed9fd0"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_hero_title.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="sec-title">
                                                <div class="sub-title">
                                                    <div class="border-left subtitle-border"></div>
                                                    <h5 class="te-subtitle">company news</h5>
                                                </div>
                                                <h2 class="te-title chirokind-size-default">Latest Articles &amp; Blogs</h2>
                                                <p>If you need to repair or replace your Plumbing system, call today and talk to one of our Plumbing.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-2f14862 elementor-widget elementor-widget-chirokind_button"
                                        data-id="2f14862"
                                        data-element_type="widget"
                                        data-settings='{"btn_padding_tablet":{"unit":"px","top":"0","right":"0","bottom":"30","left":"0","isLinked":false},"btn_margin":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true}}'
                                        data-widget_type="chirokind_button.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="btn-box yt-btn">
                                                <a class="btn-two chirokind-btn" href="https://wp1.themevibrant.com/newwp/chirokind/blog-style-01/" target='"_blank"' rel='"nofollow"'>
                                                    explore more <span class="icon-arrow-pointing-to-right"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e48d272" data-id="e48d272" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-daa2662 elementor-widget elementor-widget-chirokind_blog_grid"
                                        data-id="daa2662"
                                        data-element_type="widget"
                                        data-settings='{"btn_margin":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true}}'
                                        data-widget_type="chirokind_blog_grid.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="blog-style1-content-box te-blog" id="news">
                                                <div class="row">
                                                    <!--Start Single blog Style1-->
                                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                                        <div class="single-blog-style1">
                                                            <div class="img-holder">
                                                                <div class="inner">
                                                                    <img
                                                                        loading="lazy"
                                                                        decoding="async"
                                                                        width="370"
                                                                        height="215"
                                                                        src="https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/blog-v4-1-370x215.jpg"
                                                                        class="attachment-chirokind_370x215 size-chirokind_370x215 wp-post-image"
                                                                        alt=""
                                                                    />
                                                                    <div class="overlay-icon">
                                                                        <a href="https://wp1.themevibrant.com/newwp/chirokind/2023/07/12/how-we-can-fix-any-problem-in-tailbone-in-back/">
                                                                            <span class="icon-link"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-holder">
                                                                <div class="meta-box">
                                                                    <ul class="meta-info">
                                                                        <li><a class="te-meta" href="https://wp1.themevibrant.com/newwp/chirokind/2023/07/">July 12, 2023</a></li>
                                                                    </ul>
                                                                </div>
                                                                <h3 class="blog-title te-title">
                                                                    <a href="https://wp1.themevibrant.com/newwp/chirokind/2023/07/12/how-we-can-fix-any-problem-in-tailbone-in-back/">
                                                                        How we can fix any problem in tailbone in back.
                                                                    </a>
                                                                </h3>
                                                                <div class="btn-box">
                                                                    <div class="border-line te-btn"></div>
                                                                    <a class="te-btn" href="https://wp1.themevibrant.com/newwp/chirokind/2023/07/12/how-we-can-fix-any-problem-in-tailbone-in-back/"> Continue Reading </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single blog Style1-->
                                                    <!--Start Single blog Style1-->
                                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                                        <div class="single-blog-style1">
                                                            <div class="img-holder">
                                                                <div class="inner">
                                                                    <img
                                                                        loading="lazy"
                                                                        decoding="async"
                                                                        width="370"
                                                                        height="215"
                                                                        src="https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/blog-v4-2-370x215.jpg"
                                                                        class="attachment-chirokind_370x215 size-chirokind_370x215 wp-post-image"
                                                                        alt=""
                                                                    />
                                                                    <div class="overlay-icon">
                                                                        <a href="https://wp1.themevibrant.com/newwp/chirokind/2023/07/12/how-we-can-cover-injury-pain-by-exercise/">
                                                                            <span class="icon-link"></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-holder">
                                                                <div class="meta-box">
                                                                    <ul class="meta-info">
                                                                        <li><a class="te-meta" href="https://wp1.themevibrant.com/newwp/chirokind/2023/07/">July 12, 2023</a></li>
                                                                    </ul>
                                                                </div>
                                                                <h3 class="blog-title te-title">
                                                                    <a href="https://wp1.themevibrant.com/newwp/chirokind/2023/07/12/how-we-can-cover-injury-pain-by-exercise/">How we can cover injury pain by exercise</a>
                                                                </h3>
                                                                <div class="btn-box">
                                                                    <div class="border-line te-btn"></div>
                                                                    <a class="te-btn" href="https://wp1.themevibrant.com/newwp/chirokind/2023/07/12/how-we-can-cover-injury-pain-by-exercise/"> Continue Reading </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Single blog Style1-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-989e8cd elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="989e8cd"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6b31bcf" data-id="6b31bcf" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-7a908f1 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                        data-id="7a908f1"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-22c36a6" data-id="22c36a6" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-32a3e6d elementor-widget elementor-widget-chirokind_form"
                                        data-id="32a3e6d"
                                        data-element_type="widget"
                                        data-settings='{"form_spacing":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"form_spacing_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"form_spacing_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"form_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"form_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"form_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true}}'
                                        data-widget_type="chirokind_form.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="contact-style2-form-outer clearfix">
                                                <div
                                                    class="contact-style2-form-outer__bg"
                                                    style="background-image: url(https://wp1.themevibrant.com/newwp/chirokind/wp-content/uploads/2023/07/contact-style2-form-outer-bg.jpg);"
                                                ></div>
                                                <div class="thm-form-box-5">
                                                    <div class="inner-title">
                                                        <h2 class="te-title">Drop A Message</h2>
                                                        <p class="te-subtitle">Drop a mail, we will give to answer of all enquiries 24 hours on business days and we will call back you.</p>
                                                    </div>
                                                    <div id="thm-form-box-5" class="default-form2 te-contact-form">
                                                        <div class="wpcf7 js" id="wpcf7-f731-p17-o1" lang="en-US" dir="ltr">
                                                            <div class="screen-reader-response">
                                                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                                <ul></ul>
                                                            </div>
                                                            <form action="/newwp/chirokind/home-page-02/#wpcf7-f731-p17-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                                                <div style="display: none;">
                                                                    <input type="hidden" name="_wpcf7" value="731" />
                                                                    <input type="hidden" name="_wpcf7_version" value="5.9.3" />
                                                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f731-p17-o1" />
                                                                    <input type="hidden" name="_wpcf7_container_post" value="17" />
                                                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group">
                                                                            <div class="input-box">
                                                                                <p>
                                                                                    <span class="wpcf7-form-control-wrap" data-name="text-51">
                                                                                        <input
                                                                                            size="40"
                                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                            id="formName"
                                                                                            aria-required="true"
                                                                                            aria-invalid="false"
                                                                                            placeholder="Enter your name*"
                                                                                            value=""
                                                                                            type="text"
                                                                                            name="text-51"
                                                                                        />
                                                                                    </span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group">
                                                                            <div class="input-box">
                                                                                <p>
                                                                                    <span class="wpcf7-form-control-wrap" data-name="email-437">
                                                                                        <input
                                                                                            size="40"
                                                                                            class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                                            id="formEmail"
                                                                                            aria-required="true"
                                                                                            aria-invalid="false"
                                                                                            placeholder="Your Email Address*"
                                                                                            value=""
                                                                                            type="email"
                                                                                            name="email-437"
                                                                                        />
                                                                                    </span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group">
                                                                            <div class="input-box">
                                                                                <p>
                                                                                    <span class="wpcf7-form-control-wrap" data-name="textarea-454">
                                                                                        <textarea
                                                                                            cols="40"
                                                                                            rows="10"
                                                                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                                            id="formMessage"
                                                                                            aria-required="true"
                                                                                            aria-invalid="false"
                                                                                            placeholder="Your message"
                                                                                            name="textarea-454"
                                                                                        ></textarea>
                                                                                    </span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="button-box">
                                                                            <p>
                                                                                <button class="btn-one" type="submit"><span class="txt">Send Message</span></button>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a24e256" data-id="a24e256" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-f9ffbad elementor-widget elementor-widget-chirokind_google_map"
                                        data-id="f9ffbad"
                                        data-element_type="widget"
                                        data-settings='{"chirokind_layout_margin":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_margin_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_margin_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"chirokind_layout_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true}}'
                                        data-widget_type="chirokind_google_map.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="home-two-google-map bn-google-map" id="contact">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d846575.5772509228!2d-119.07125473213024!3d34.01985759462209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2s!4v1689320158323!5m2!1sen!2s"
                                                    width="600"
                                                    height="643"
                                                    style="border: 0;"
                                                    allowfullscreen=""
                                                    loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade"
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-2cf0b53 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="2cf0b53"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
    >
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bc879ff" data-id="bc879ff" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-6c7c65f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="6c7c65f"
                        data-element_type="section"
                    >
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e47c146" data-id="e47c146" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-8b93dc0 elementor-widget elementor-widget-chirokind_hero_title"
                                        data-id="8b93dc0"
                                        data-element_type="widget"
                                        data-widget_type="chirokind_hero_title.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="sec-title">
                                                <div class="sub-title">
                                                    <div class="border-left subtitle-border"></div>
                                                    <h5 class="te-subtitle">Subscribe to newsletter</h5>
                                                </div>
                                                <h2 class="te-title chirokind-size-default">Get tip &amp; tricks for be healthy withour pain.</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c116855" data-id="c116855" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-aa6275c elementor-widget elementor-widget-chirokind_newsletter_form"
                                        data-id="aa6275c"
                                        data-element_type="widget"
                                        data-settings='{"form_spacing":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"form_spacing_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"form_spacing_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"form_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"form_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"form_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_margin_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"btn_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true}}'
                                        data-widget_type="chirokind_newsletter_form.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <div class="newsletter-style1__form news___letter te-contact-form">
                                                <script>
                                                    (function () {
                                                        window.mc4wp = window.mc4wp || {
                                                            listeners: [],
                                                            forms: {
                                                                on: function (evt, cb) {
                                                                    window.mc4wp.listeners.push({
                                                                        event: evt,
                                                                        callback: cb,
                                                                    });
                                                                },
                                                            },
                                                        };
                                                    })();
                                                </script>
                                                <!-- Mailchimp for WordPress v4.9.11 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                                <form id="mc4wp-form-2" class="mc4wp-form mc4wp-form-201" method="post" data-id="201" data-name="Newsletter Form">
                                                    <div class="mc4wp-form-fields">
                                                        <div class="form-group">
                                                            <input type="email" name="email" placeholder="Enter your email" required="" />
                                                            <button class="submit"><i class="icon-paper-plane"></i></button>
                                                        </div>
                                                    </div>
                                                    <label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label>
                                                    <input type="hidden" name="_mc4wp_timestamp" value="1713657903" /><input type="hidden" name="_mc4wp_form_id" value="201" />
                                                    <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-2" />
                                                    <div class="mc4wp-response"></div>
                                                </form>
                                                <!-- / Mailchimp for WordPress Plugin -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
