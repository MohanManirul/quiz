@extends("frontend.template.layout")

@section('per_page_css')
<link rel="stylesheet" href="{{ asset('frontend/css/lc_switch.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/google_auth.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/simple-line-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/scss/icons/weather-icons/css/weather-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/scss/icons/linea-icons/linea.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/scss/icons/themify-icons/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/scss/icons/flag-icon-css/flag-icon.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/scss/icons/material-design-iconic-font/css/materialdesignicons.min.css') }}">
<style>
 .preloader {
    width: 100%;
    height: 100%;
    top: 0px;
    position: fixed;
    z-index: 99999;
    background: #fff
}
.preloader .cssload-speeding-wheel {
    position: absolute;
    top: calc(50% - 3.5px);
    left: calc(50% - 3.5px)
}
* {
    outline: none
}
body {
    background: #fff;
    font-family: "Poppins", sans-serif;
    margin: 0;
    overflow-x: hidden;
    color: #67757c;
    font-weight: 300
}
html {
    position: relative;
    min-height: 100%;
    background: #ffffff
}
a:focus,
a:hover {
    text-decoration: none
}
a.link {
    color: #455a64
}
a.link:focus,
a.link:hover {
    color: #1976d2
}
.img-responsive {
    width: 100%;
    height: auto;
    display: inline-block
}
.img-rounded {
    border-radius: 4px
}
html body .mdi-set,
html body .mdi:before {
    line-height: initial
}
h1,
h2,
h3,
h4,
h5,
h6 {
    color: #455a64;
    font-family: "Poppins", sans-serif;
    font-weight: 400
}
h1 {
    line-height: 40px;
    font-size: 36px
}
h2 {
    line-height: 36px;
    font-size: 24px
}
h3 {
    line-height: 30px;
    font-size: 21px
}
h4 {
    line-height: 22px;
    font-size: 18px
}
h5 {
    line-height: 18px;
    font-size: 16px;
    font-weight: 400
}
h6 {
    line-height: 16px;
    font-size: 14px;
    font-weight: 400
}
.display-5 {
    font-size: 3rem
}
.display-6 {
    font-size: 36px
}
.box {
    border-radius: 4px;
    padding: 10px
}
html body .dl {
    display: inline-block
}
html body .db {
    display: block
}
.no-wrap td,
.no-wrap th {
    white-space: nowrap
}
html body blockquote {
    border-left: 5px solid #1976d2;
    border: 1px solid rgba(120, 130, 140, 0.13);
    padding: 15px
}
.clear {
    clear: both
}
ol li {
    margin: 5px 0
}
html body .p-0 {
    padding: 0px
}
html body .p-10 {
    padding: 10px
}
html body .p-20 {
    padding: 20px
}
html body .p-30 {
    padding: 30px
}
html body .p-l-0 {
    padding-left: 0px
}
html body .p-l-10 {
    padding-left: 10px
}
html body .p-l-20 {
    padding-left: 20px
}
html body .p-r-0 {
    padding-right: 0px
}
html body .p-r-10 {
    padding-right: 10px
}
html body .p-r-20 {
    padding-right: 20px
}
html body .p-r-30 {
    padding-right: 30px
}
html body .p-r-40 {
    padding-right: 40px
}
html body .p-t-0 {
    padding-top: 0px
}
html body .p-t-10 {
    padding-top: 10px
}
html body .p-t-20 {
    padding-top: 20px
}
html body .p-t-30 {
    padding-top: 30px
}
html body .p-b-0 {
    padding-bottom: 0px
}
html body .p-b-5 {
    padding-bottom: 5px
}
html body .p-b-10 {
    padding-bottom: 10px
}
html body .p-b-20 {
    padding-bottom: 20px
}
html body .p-b-30 {
    padding-bottom: 30px
}
html body .p-b-40 {
    padding-bottom: 40px
}
html body .m-0 {
    margin: 0px
}
html body .m-l-5 {
    margin-left: 5px
}
html body .m-l-10 {
    margin-left: 10px
}
html body .m-l-15 {
    margin-left: 15px
}
html body .m-l-20 {
    margin-left: 20px
}
html body .m-l-30 {
    margin-left: 30px
}
html body .m-l-40 {
    margin-left: 40px
}
html body .m-r-5 {
    margin-right: 5px
}
html body .m-r-10 {
    margin-right: 10px
}
html body .m-r-15 {
    margin-right: 15px
}
html body .m-r-20 {
    margin-right: 20px
}
html body .m-r-30 {
    margin-right: 30px
}
html body .m-r-40 {
    margin-right: 40px
}
html body .m-t-0 {
    margin-top: 0px
}
html body .m-t-5 {
    margin-top: 5px
}
html body .m-t-10 {
    margin-top: 10px
}
html body .m-t-15 {
    margin-top: 15px
}
html body .m-t-20 {
    margin-top: 20px
}
html body .m-t-30 {
    margin-top: 30px
}
html body .m-t-40 {
    margin-top: 40px
}
html body .m-b-0 {
    margin-bottom: 0px
}
html body .m-b-5 {
    margin-bottom: 5px
}
html body .m-b-10 {
    margin-bottom: 10px
}
html body .m-b-15 {
    margin-bottom: 15px
}
html body .m-b-20 {
    margin-bottom: 20px
}
html body .m-b-30 {
    margin-bottom: 30px
}
html body .m-b-40 {
    margin-bottom: 40px
}
html body .vt {
    vertical-align: top
}
html body .vm {
    vertical-align: middle
}
html body .vb {
    vertical-align: bottom
}
.op-5 {
    opacity: 0.5
}
html body .font-bold {
    font-weight: 700
}
html body .font-normal {
    font-weight: normal
}
html body .font-light {
    font-weight: 300
}
html body .font-medium {
    font-weight: 500
}
html body .font-16 {
    font-size: 16px
}
html body .font-14 {
    font-size: 14px
}
html body .font-10 {
    font-size: 10px
}
html body .font-18 {
    font-size: 18px
}
html body .font-20 {
    font-size: 20px
}
html body .b-0 {
    border: none
}
html body .b-r {
    border-right: 1px solid rgba(120, 130, 140, 0.13)
}
html body .b-l {
    border-left: 1px solid rgba(120, 130, 140, 0.13)
}
html body .b-b {
    border-bottom: 1px solid rgba(120, 130, 140, 0.13)
}
html body .b-t {
    border-top: 1px solid rgba(120, 130, 140, 0.13)
}
html body .b-all {
    border: 1px solid rgba(120, 130, 140, 0.13)!important
}
.thumb-sm {
    height: 32px;
    width: 32px
}
.thumb-md {
    height: 48px;
    width: 48px
}
.thumb-lg {
    height: 88px;
    width: 88px
}
.hide {
    display: none
}
.img-circle {
    border-radius: 100%
}
.radius {
    border-radius: 4px
}
.text-white {
    color: #ffffff!important
}
.text-danger {
    color: #ef5350!important
}
.text-muted {
    color: #99abb4!important
}
.text-warning {
    color: #ffb22b!important
}
.text-success {
    color: #26dad2!important
}
.text-info {
    color: #1976d2!important
}
.text-inverse {
    color: #2f3d4a!important
}
html body .text-blue {
    color: #02bec9
}
html body .text-purple {
    color: #7460ee
}
html body .text-primary {
    color: #5c4ac7
}
html body .text-megna {
    color: #00897b
}
html body .text-dark {
    color: #67757c
}
html body .text-themecolor {
    color: #1976d2
}
.bg-primary {
    background-color: #5c4ac7!important
}
.bg-success {
    background-color: #26dad2!important
}
.bg-info {
    background-color: #1976d2!important
}
.bg-warning {
    background-color: #ffb22b!important
}
.bg-danger {
    background-color: #ef5350!important
}
html body .bg-megna {
    background-color: #00897b
}
html body .bg-theme {
    background-color: #1976d2
}
html body .bg-inverse {
    background-color: #2f3d4a
}
html body .bg-purple {
    background-color: #7460ee
}
html body .bg-light-part {
    background-color: rgba(0, 0, 0, 0.02)
}
html body .bg-light-primary {
    background-color: #f1effd
}
html body .bg-light-success {
    background-color: #e8fdeb
}
html body .bg-light-info {
    background-color: #cfecfe
}
html body .bg-light-extra {
    background-color: #ebf3f5
}
html body .bg-light-warning {
    background-color: #fff8ec
}
html body .bg-light-danger {
    background-color: #f9e7eb
}
html body .bg-light-inverse {
    background-color: #f6f6f6
}
html body .bg-light {
    background-color: #f2f4f8
}
html body .bg-white {
    background-color: #ffffff
}
.round {
    line-height: 48px;
    color: #ffffff;
    width: 50px;
    height: 50px;
    display: inline-block;
    font-weight: 400;
    text-align: center;
    border-radius: 100%;
    background: #1976d2
}
.round img {
    border-radius: 100%
}
.round-lg {
    line-height: 65px;
    width: 60px;
    height: 60px;
    font-size: 30px
}
.round.round-info {
    background: #1976d2
}
.round.round-warning {
    background: #ffb22b
}
.round.round-danger {
    background: #ef5350
}
.round.round-success {
    background: #26dad2
}
.round.round-primary {
    background: #5c4ac7
}
.label {
    padding: 3px 10px;
    line-height: 13px;
    color: #ffffff;
    font-weight: 400;
    border-radius: 4px;
    font-size: 75%
}
.label-rounded {
    border-radius: 60px
}
.label-custom {
    background-color: #00897b
}
.label-success {
    background-color: #26dad2
}
.label-info {
    background-color: #1976d2
}
.label-warning {
    background-color: #ffb22b
}
.label-danger {
    background-color: #ef5350
}
.label-megna {
    background-color: #00897b
}
.label-primary {
    background-color: #5c4ac7
}
.label-purple {
    background-color: #7460ee
}
.label-red {
    background-color: #fb3a3a
}
.label-inverse {
    background-color: #2f3d4a
}
.label-default {
    background-color: #f2f4f8
}
.label-white {
    background-color: #ffffff
}
.label-light-success {
    background-color: #e8fdeb;
    color: #26dad2
}
.label-light-info {
    background-color: #cfecfe;
    color: #1976d2
}
.label-light-warning {
    background-color: #fff8ec;
    color: #ffb22b
}
.label-light-danger {
    background-color: #f9e7eb;
    color: #ef5350
}
.label-light-megna {
    background-color: #e0f2f4;
    color: #00897b
}
.label-light-primary {
    background-color: #f1effd;
    color: #5c4ac7
}
.label-light-inverse {
    background-color: #f6f6f6;
    color: #2f3d4a
}
.pagination>li:first-child>a,
.pagination>li:first-child>span {
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px
}
.pagination>li:last-child>a,
.pagination>li:last-child>span {
    border-bottom-right-radius: 4px;
    border-top-right-radius: 4px
}
.pagination>li>a,
.pagination>li>span {
    color: #263238
}
.pagination>li>a:focus,
.pagination>li>a:hover,
.pagination>li>span:focus,
.pagination>li>span:hover {
    background-color: #f2f4f8
}
.pagination-split li {
    margin-left: 5px;
    display: inline-block;
    float: left
}
.pagination-split li:first-child {
    margin-left: 0
}
.pagination-split li a {
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px
}
.pagination>.active>a,
.pagination>.active>a:focus,
.pagination>.active>a:hover,
.pagination>.active>span,
.pagination>.active>span:focus,
.pagination>.active>span:hover {
    background-color: #1976d2;
    border-color: #1976d2
}
.pager li>a,
.pager li>span {
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    color: #263238
}
.table-box {
    display: table;
    width: 100%
}
.table.no-border tbody td {
    border: 0px
}
.cell {
    display: table-cell;
    vertical-align: middle
}
.table td,
.table th {
    border-color: #f3f1f1
}
.table th,
.table thead th {
    font-weight: 500
}
.table-hover tbody tr:hover {
    background: #f2f4f8
}
.nowrap {
    white-space: nowrap
}
.lite-padding td {
    padding: 5px
}
.v-middle td,
.v-middle th {
    vertical-align: middle
}
.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar
}
.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    will-change: opacity, transform;
    -webkit-transition: all 0.1s ease-out;
    -moz-transition: all 0.1s ease-out;
    -o-transition: all 0.1s ease-out;
    -ms-transition: all 0.1s ease-out;
    transition: all 0.1s ease-out
}
.waves-effect .waves-ripple {
    position: absolute;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    margin-top: -10px;
    margin-left: -10px;
    opacity: 0;
    background: rgba(0, 0, 0, 0.2);
    -webkit-transition: all 0.7s ease-out;
    -moz-transition: all 0.7s ease-out;
    -o-transition: all 0.7s ease-out;
    -ms-transition: all 0.7s ease-out;
    transition: all 0.7s ease-out;
    -webkit-transition-property: -webkit-transform, opacity;
    -moz-transition-property: -moz-transform, opacity;
    -o-transition-property: -o-transform, opacity;
    -webkit-transition-property: opacity, -webkit-transform;
    transition-property: opacity, -webkit-transform;
    -o-transition-property: transform, opacity;
    transition-property: transform, opacity;
    transition-property: transform, opacity, -webkit-transform;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
    pointer-events: none
}
.waves-effect.waves-light .waves-ripple {
    background-color: rgba(255, 255, 255, 0.45)
}
.waves-effect.waves-red .waves-ripple {
    background-color: rgba(244, 67, 54, 0.7)
}
.waves-effect.waves-yellow .waves-ripple {
    background-color: rgba(255, 235, 59, 0.7)
}
.waves-effect.waves-orange .waves-ripple {
    background-color: rgba(255, 152, 0, 0.7)
}
.waves-effect.waves-purple .waves-ripple {
    background-color: rgba(156, 39, 176, 0.7)
}
.waves-effect.waves-green .waves-ripple {
    background-color: rgba(76, 175, 80, 0.7)
}
.waves-effect.waves-teal .waves-ripple {
    background-color: rgba(0, 150, 136, 0.7)
}
html body .waves-notransition {
    -webkit-transition: none;
    -moz-transition: none;
    -o-transition: none;
    -ms-transition: none;
    transition: none
}
.waves-circle {
    -webkit-transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -o-transform: translateZ(0);
    transform: translateZ(0);
    text-align: center;
    width: 2.5em;
    height: 2.5em;
    line-height: 2.5em;
    border-radius: 50%;
    -webkit-mask-image: none
}
.waves-input-wrapper {
    border-radius: 0.2em;
    vertical-align: bottom
}
.waves-input-wrapper .waves-button-input {
    position: relative;
    top: 0;
    left: 0;
    z-index: 1
}
.waves-block {
    display: block
}
.badge {
    font-weight: 400
}
.badge-xs {
    font-size: 9px
}
.badge-sm,
.badge-xs {
    -webkit-transform: translate(0, -2px);
    -ms-transform: translate(0, -2px);
    -o-transform: translate(0, -2px);
    transform: translate(0, -2px)
}
.badge-success {
    background-color: #26dad2
}
.badge-info {
    background-color: #1976d2
}
.badge-primary {
    background-color: #5c4ac7
}
.badge-warning {
    background-color: #ffb22b
}
.badge-danger {
    background-color: #ef5350
}
.badge-purple {
    background-color: #7460ee
}
.badge-red {
    background-color: #fb3a3a
}
.badge-inverse {
    background-color: #2f3d4a
}
.btn {
    padding: 7px 12px;
    cursor: pointer
}
.btn-group label {
    color: #ffffff!important;
    margin-bottom: 0px
}
.btn-group label.btn-secondary {
    color: #67757c!important
}
.btn-lg {
    padding: .75rem 1.5rem;
    font-size: 1.25rem
}
.btn-md {
    padding: 12px 55px;
    font-size: 16px
}
.btn-circle {
    border-radius: 100%;
    width: 40px;
    height: 40px;
    padding: 10px
}
.btn-circle.btn-sm {
    width: 35px;
    height: 35px;
    padding: 8px 10px;
    font-size: 14px
}
.btn-circle.btn-lg {
    width: 50px;
    height: 50px;
    padding: 14px 15px;
    font-size: 18px;
    line-height: 22px
}
.btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 14px 15px;
    font-size: 24px
}
.btn-sm {
    padding: .25rem .5rem;
    font-size: 12px
}
.btn-xs {
    padding: .25rem .5rem;
    font-size: 10px
}
.button-list a,
.button-list button {
    margin: 5px 12px 5px 0
}
.btn-outline {
    color: inherit;
    background-color: transparent;
    -webkit-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s
}
.btn-rounded {
    border-radius: 60px;
    padding: 7px 18px
}
.btn-rounded.btn-lg {
    padding: .75rem 1.5rem
}
.btn-rounded.btn-sm {
    padding: .25rem .5rem;
    font-size: 12px
}
.btn-rounded.btn-xs {
    padding: .25rem .5rem;
    font-size: 10px
}
.btn-rounded.btn-md {
    padding: 12px 35px;
    font-size: 16px
}
.btn-secondary,
.btn-secondary.disabled {
    -webkit-box-shadow: 0 2px 2px 0 rgba(169, 169, 169, 0.14), 0 3px 1px -2px rgba(169, 169, 169, 0.2), 0 1px 5px 0 rgba(169, 169, 169, 0.12);
    box-shadow: 0 2px 2px 0 rgba(169, 169, 169, 0.14), 0 3px 1px -2px rgba(169, 169, 169, 0.2), 0 1px 5px 0 rgba(169, 169, 169, 0.12);
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in;
    background-color: #ffffff;
    color: #67757c;
    border-color: #b1b8bb
}
.btn-secondary.disabled:hover,
.btn-secondary:hover {
    -webkit-box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2);
    box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2)
}
.btn-secondary.active,
.btn-secondary.disabled.active,
.btn-secondary.disabled:active,
.btn-secondary.disabled:focus,
.btn-secondary:active,
.btn-secondary:focus {
    -webkit-box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2);
    box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2)
}
.btn-primary,
.btn-primary.disabled {
    background: #5c4ac7;
    border: 1px solid #5c4ac7;
    -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
    box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in
}
.btn-primary.disabled:hover,
.btn-primary:hover {
    background: #5c4ac7;
    -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
    box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
    border: 1px solid #5c4ac7
}
.btn-primary.active,
.btn-primary.disabled.active,
.btn-primary.disabled:active,
.btn-primary.disabled:focus,
.btn-primary:active,
.btn-primary:focus {
    background: #6352ce;
    -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
    box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2)
}
.btn-themecolor,
.btn-themecolor.disabled {
    background: #1976d2;
    color: #ffffff;
    border: 1px solid #1976d2
}
.btn-themecolor.disabled:hover,
.btn-themecolor:hover {
    background: #1976d2;
    opacity: 0.7;
    border: 1px solid #1976d2
}
.btn-themecolor.active,
.btn-themecolor.disabled.active,
.btn-themecolor.disabled:active,
.btn-themecolor.disabled:focus,
.btn-themecolor:active,
.btn-themecolor:focus {
    background: #028ee1
}
.btn-success,
.btn-success.disabled {
    background: #26dad2;
    border: 1px solid #26dad2;
    -webkit-box-shadow: 0 2px 2px 0 rgba(40, 190, 189, 0.14), 0 3px 1px -2px rgba(40, 190, 189, 0.2), 0 1px 5px 0 rgba(40, 190, 189, 0.12);
    box-shadow: 0 2px 2px 0 rgba(40, 190, 189, 0.14), 0 3px 1px -2px rgba(40, 190, 189, 0.2), 0 1px 5px 0 rgba(40, 190, 189, 0.12);
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in
}
.btn-success.disabled:hover,
.btn-success:hover {
    background: #26dad2;
    -webkit-box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2);
    box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2);
    border: 1px solid #26dad2
}
.btn-success.active,
.btn-success.disabled.active,
.btn-success.disabled:active,
.btn-success.disabled:focus,
.btn-success:active,
.btn-success:focus {
    background: #1eacbe;
    -webkit-box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2);
    box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2)
}
.btn-info,
.btn-info.disabled {
    background: #1976d2;
    border: 1px solid #1976d2;
    -webkit-box-shadow: 0 2px 2px 0 rgba(66, 165, 245, 0.14), 0 3px 1px -2px rgba(66, 165, 245, 0.2), 0 1px 5px 0 rgba(66, 165, 245, 0.12);
    box-shadow: 0 2px 2px 0 rgba(66, 165, 245, 0.14), 0 3px 1px -2px rgba(66, 165, 245, 0.2), 0 1px 5px 0 rgba(66, 165, 245, 0.12);
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in
}
.btn-info.disabled:hover,
.btn-info:hover {
    background: #1976d2;
    border: 1px solid #1976d2;
    -webkit-box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
    box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2)
}
.btn-info.active,
.btn-info.disabled.active,
.btn-info.disabled:active,
.btn-info.disabled:focus,
.btn-info:active,
.btn-info:focus {
    background: #028ee1;
    -webkit-box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
    box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2)
}
.btn-warning,
.btn-warning.disabled {
    background: #ffb22b;
    color: #ffffff;
    -webkit-box-shadow: 0 2px 2px 0 rgba(248, 194, 0, 0.14), 0 3px 1px -2px rgba(248, 194, 0, 0.2), 0 1px 5px 0 rgba(248, 194, 0, 0.12);
    box-shadow: 0 2px 2px 0 rgba(248, 194, 0, 0.14), 0 3px 1px -2px rgba(248, 194, 0, 0.2), 0 1px 5px 0 rgba(248, 194, 0, 0.12);
    border: 1px solid #ffb22b;
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in;
    color: #ffffff
}
.btn-warning.disabled:hover,
.btn-warning:hover {
    background: #ffb22b;
    color: #ffffff;
    -webkit-box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2);
    box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2);
    border: 1px solid #ffb22b
}
.btn-warning.active,
.btn-warning.disabled.active,
.btn-warning.disabled:active,
.btn-warning.disabled:focus,
.btn-warning:active,
.btn-warning:focus {
    background: #e9ab2e;
    color: #ffffff;
    -webkit-box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2);
    box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2)
}
.btn-danger,
.btn-danger.disabled {
    background: #ef5350;
    border: 1px solid #ef5350;
    -webkit-box-shadow: 0 2px 2px 0 rgba(239, 83, 80, 0.14), 0 3px 1px -2px rgba(239, 83, 80, 0.2), 0 1px 5px 0 rgba(239, 83, 80, 0.12);
    box-shadow: 0 2px 2px 0 rgba(239, 83, 80, 0.14), 0 3px 1px -2px rgba(239, 83, 80, 0.2), 0 1px 5px 0 rgba(239, 83, 80, 0.12);
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in
}
.btn-danger.disabled:hover,
.btn-danger:hover {
    background: #ef5350;
    -webkit-box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
    box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
    border: 1px solid #ef5350
}
.btn-danger.active,
.btn-danger.disabled.active,
.btn-danger.disabled:active,
.btn-danger.disabled:focus,
.btn-danger:active,
.btn-danger:focus {
    background: #e6294b;
    -webkit-box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
    box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2)
}
.btn-inverse,
.btn-inverse.disabled {
    background: #2f3d4a;
    border: 1px solid #2f3d4a;
    color: #ffffff
}
.btn-inverse.disabled:hover,
.btn-inverse:hover {
    background: #2f3d4a;
    opacity: 0.7;
    color: #ffffff;
    border: 1px solid #2f3d4a
}
.btn-inverse.active,
.btn-inverse.disabled.active,
.btn-inverse.disabled:active,
.btn-inverse.disabled:focus,
.btn-inverse:active,
.btn-inverse:focus {
    background: #232a37;
    color: #ffffff
}
.btn-red,
.btn-red.disabled {
    background: #fb3a3a;
    border: 1px solid #fb3a3a;
    color: #ffffff
}
.btn-red.disabled:hover,
.btn-red:hover {
    opacity: 0.7;
    border: 1px solid #fb3a3a;
    background: #fb3a3a
}
.btn-red.active,
.btn-red.disabled.active,
.btn-red.disabled:active,
.btn-red.disabled:focus,
.btn-red:active,
.btn-red:focus {
    background: #e6294b
}
.btn-outline-secondary {
    background-color: #ffffff;
    -webkit-box-shadow: 0 2px 2px 0 rgba(169, 169, 169, 0.14), 0 3px 1px -2px rgba(169, 169, 169, 0.2), 0 1px 5px 0 rgba(169, 169, 169, 0.12);
    box-shadow: 0 2px 2px 0 rgba(169, 169, 169, 0.14), 0 3px 1px -2px rgba(169, 169, 169, 0.2), 0 1px 5px 0 rgba(169, 169, 169, 0.12);
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in
}
.btn-outline-secondary.focus,
.btn-outline-secondary:focus,
.btn-outline-secondary:hover {
    -webkit-box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2);
    box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2)
}
.btn-outline-secondary.active,
.btn-outline-secondary:active,
.btn-outline-secondary:focus {
    -webkit-box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2);
    box-shadow: 0 14px 26px -12px rgba(169, 169, 169, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(169, 169, 169, 0.2)
}
.btn-outline-primary {
    color: #5c4ac7;
    background-color: #ffffff;
    border-color: #5c4ac7;
    -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
    box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in
}
.btn-outline-primary.focus,
.btn-outline-primary:focus,
.btn-outline-primary:hover {
    background: #5c4ac7;
    -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
    box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
    color: #ffffff;
    border-color: #5c4ac7
}
.btn-outline-primary.active,
.btn-outline-primary:active,
.btn-outline-primary:focus {
    -webkit-box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
    box-shadow: 0 14px 26px -12px rgba(116, 96, 238, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(116, 96, 238, 0.2);
    background: #6352ce
}
.btn-outline-success {
    color: #26dad2;
    background-color: transparent;
    border-color: #26dad2;
    -webkit-box-shadow: 0 2px 2px 0 rgba(40, 190, 189, 0.14), 0 3px 1px -2px rgba(40, 190, 189, 0.2), 0 1px 5px 0 rgba(40, 190, 189, 0.12);
    box-shadow: 0 2px 2px 0 rgba(40, 190, 189, 0.14), 0 3px 1px -2px rgba(40, 190, 189, 0.2), 0 1px 5px 0 rgba(40, 190, 189, 0.12);
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in
}
.btn-outline-success.focus,
.btn-outline-success:focus,
.btn-outline-success:hover {
    background: #26dad2;
    border-color: #26dad2;
    color: #ffffff;
    -webkit-box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2);
    box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2)
}
.btn-outline-success.active,
.btn-outline-success:active,
.btn-outline-success:focus {
    -webkit-box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2);
    box-shadow: 0 14px 26px -12px rgba(40, 190, 189, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(40, 190, 189, 0.2);
    background: #1eacbe
}
.btn-outline-info {
    color: #1976d2;
    background-color: transparent;
    border-color: #1976d2;
    -webkit-box-shadow: 0 2px 2px 0 rgba(66, 165, 245, 0.14), 0 3px 1px -2px rgba(66, 165, 245, 0.2), 0 1px 5px 0 rgba(66, 165, 245, 0.12);
    box-shadow: 0 2px 2px 0 rgba(66, 165, 245, 0.14), 0 3px 1px -2px rgba(66, 165, 245, 0.2), 0 1px 5px 0 rgba(66, 165, 245, 0.12);
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in
}
.btn-outline-info.focus,
.btn-outline-info:focus,
.btn-outline-info:hover {
    background: #1976d2;
    border-color: #1976d2;
    color: #ffffff;
    -webkit-box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
    box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2)
}
.btn-outline-info.active,
.btn-outline-info:active,
.btn-outline-info:focus {
    -webkit-box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
    box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2);
    background: #028ee1
}
.btn-outline-warning {
    color: #ffb22b;
    background-color: transparent;
    border-color: #ffb22b;
    -webkit-box-shadow: 0 2px 2px 0 rgba(248, 194, 0, 0.14), 0 3px 1px -2px rgba(248, 194, 0, 0.2), 0 1px 5px 0 rgba(248, 194, 0, 0.12);
    box-shadow: 0 2px 2px 0 rgba(248, 194, 0, 0.14), 0 3px 1px -2px rgba(248, 194, 0, 0.2), 0 1px 5px 0 rgba(248, 194, 0, 0.12);
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in
}
.btn-outline-warning.focus,
.btn-outline-warning:focus,
.btn-outline-warning:hover {
    background: #ffb22b;
    border-color: #ffb22b;
    color: #ffffff;
    -webkit-box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2);
    box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2)
}
.btn-outline-warning.active,
.btn-outline-warning:active,
.btn-outline-warning:focus {
    -webkit-box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2);
    box-shadow: 0 14px 26px -12px rgba(248, 194, 0, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(248, 194, 0, 0.2);
    background: #e9ab2e
}
.btn-outline-danger {
    color: #ef5350;
    background-color: transparent;
    border-color: #ef5350;
    -webkit-box-shadow: 0 2px 2px 0 rgba(239, 83, 80, 0.14), 0 3px 1px -2px rgba(239, 83, 80, 0.2), 0 1px 5px 0 rgba(239, 83, 80, 0.12);
    box-shadow: 0 2px 2px 0 rgba(239, 83, 80, 0.14), 0 3px 1px -2px rgba(239, 83, 80, 0.2), 0 1px 5px 0 rgba(239, 83, 80, 0.12);
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in
}
.btn-outline-danger.focus,
.btn-outline-danger:focus,
.btn-outline-danger:hover {
    background: #ef5350;
    border-color: #ef5350;
    color: #ffffff;
    -webkit-box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
    box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2)
}
.btn-outline-danger.active,
.btn-outline-danger:active,
.btn-outline-danger:focus {
    -webkit-box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
    box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
    background: #e6294b
}
.btn-outline-red {
    color: #fb3a3a;
    background-color: transparent;
    border-color: #fb3a3a
}
.btn-outline-red.focus,
.btn-outline-red:focus,
.btn-outline-red:hover {
    background: #fb3a3a;
    border-color: #fb3a3a;
    color: #ffffff;
    -webkit-box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
    box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2)
}
.btn-outline-red.active,
.btn-outline-red:active,
.btn-outline-red:focus {
    -webkit-box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
    box-shadow: 0 14px 26px -12px rgba(239, 83, 80, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(239, 83, 80, 0.2);
    background: #e6294b
}
.btn-outline-inverse {
    color: #2f3d4a;
    background-color: transparent;
    border-color: #2f3d4a
}
.btn-outline-inverse.focus,
.btn-outline-inverse:focus,
.btn-outline-inverse:hover {
    background: #2f3d4a;
    border-color: #2f3d4a;
    color: #ffffff
}
.btn-primary.active.focus,
.btn-primary.active:focus,
.btn-primary.active:hover,
.btn-primary.focus,
.btn-primary.focus:active,
.btn-primary:active:focus,
.btn-primary:active:hover,
.btn-primary:focus,
.open>.dropdown-toggle.btn-primary.focus,
.open>.dropdown-toggle.btn-primary:focus,
.open>.dropdown-toggle.btn-primary:hover {
    background-color: #6352ce;
    border: 1px solid #6352ce
}
.btn-success.active.focus,
.btn-success.active:focus,
.btn-success.active:hover,
.btn-success.focus,
.btn-success.focus:active,
.btn-success:active:focus,
.btn-success:active:hover,
.btn-success:focus,
.open>.dropdown-toggle.btn-success.focus,
.open>.dropdown-toggle.btn-success:focus,
.open>.dropdown-toggle.btn-success:hover {
    background-color: #1eacbe;
    border: 1px solid #1eacbe
}
.btn-info.active.focus,
.btn-info.active:focus,
.btn-info.active:hover,
.btn-info.focus,
.btn-info.focus:active,
.btn-info:active:focus,
.btn-info:active:hover,
.btn-info:focus,
.open>.dropdown-toggle.btn-info.focus,
.open>.dropdown-toggle.btn-info:focus,
.open>.dropdown-toggle.btn-info:hover {
    background-color: #028ee1;
    border: 1px solid #028ee1
}
.btn-warning.active.focus,
.btn-warning.active:focus,
.btn-warning.active:hover,
.btn-warning.focus,
.btn-warning.focus:active,
.btn-warning:active:focus,
.btn-warning:active:hover,
.btn-warning:focus,
.open>.dropdown-toggle.btn-warning.focus,
.open>.dropdown-toggle.btn-warning:focus,
.open>.dropdown-toggle.btn-warning:hover {
    background-color: #e9ab2e;
    border: 1px solid #e9ab2e
}
.btn-danger.active.focus,
.btn-danger.active:focus,
.btn-danger.active:hover,
.btn-danger.focus,
.btn-danger.focus:active,
.btn-danger:active:focus,
.btn-danger:active:hover,
.btn-danger:focus,
.open>.dropdown-toggle.btn-danger.focus,
.open>.dropdown-toggle.btn-danger:focus,
.open>.dropdown-toggle.btn-danger:hover {
    background-color: #e6294b;
    border: 1px solid #e6294b
}
.btn-inverse.active,
.btn-inverse.focus,
.btn-inverse:active,
.btn-inverse:focus,
.btn-inverse:hover,
.btn-inverse:hover,
.open>.dropdown-toggle.btn-inverse {
    background-color: #232a37;
    border: 1px solid #232a37
}
.btn-red.active,
.btn-red.focus,
.btn-red:active,
.btn-red:focus,
.btn-red:hover,
.btn-red:hover,
.open>.dropdown-toggle.btn-red {
    background-color: #d61f1f;
    border: 1px solid #d61f1f;
    color: #ffffff
}
.button-box .btn {
    margin: 0 8px 8px 0px
}
.btn-label {
    background: rgba(0, 0, 0, 0.05);
    display: inline-block;
    margin: -6px 12px -6px -14px;
    padding: 7px 15px
}
.btn-facebook {
    color: #ffffff;
    background-color: #3b5998
}
.btn-twitter {
    color: #ffffff;
    background-color: #55acee
}
.btn-linkedin {
    color: #ffffff;
    background-color: #007bb6
}
.btn-dribbble {
    color: #ffffff;
    background-color: #ea4c89
}
.btn-googleplus {
    color: #ffffff;
    background-color: #dd4b39
}
.btn-instagram {
    color: #ffffff;
    background-color: #3f729b
}
.btn-pinterest {
    color: #ffffff;
    background-color: #cb2027
}
.btn-dropbox {
    color: #ffffff;
    background-color: #007ee5
}
.btn-flickr {
    color: #ffffff;
    background-color: #ff0084
}
.btn-tumblr {
    color: #ffffff;
    background-color: #32506d
}
.btn-skype {
    color: #ffffff;
    background-color: #00aff0
}
.btn-youtube {
    color: #ffffff;
    background-color: #bb0000
}
.btn-github {
    color: #ffffff;
    background-color: #171515
}
.notify {
    position: relative;
    top: -22px;
    right: -9px
}
.notify .heartbit {
    position: absolute;
    top: -20px;
    right: -4px;
    height: 25px;
    width: 25px;
    z-index: 10;
    border: 5px solid #ef5350;
    border-radius: 70px;
    -moz-animation: heartbit 1s ease-out;
    -moz-animation-iteration-count: infinite;
    -o-animation: heartbit 1s ease-out;
    -o-animation-iteration-count: infinite;
    -webkit-animation: heartbit 1s ease-out;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite
}
.notify .point {
    width: 6px;
    height: 6px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
    background-color: #ef5350;
    position: absolute;
    right: 6px;
    top: -10px
}
@-moz-keyframes heartbit {
    0% {
        -moz-transform: scale(0);
        opacity: 0.0
    }
    25% {
        -moz-transform: scale(0.1);
        opacity: 0.1
    }
    50% {
        -moz-transform: scale(0.5);
        opacity: 0.3
    }
    75% {
        -moz-transform: scale(0.8);
        opacity: 0.5
    }
    to {
        -moz-transform: scale(1);
        opacity: 0.0
    }
}
@-webkit-keyframes heartbit {
    0% {
        -webkit-transform: scale(0);
        opacity: 0.0
    }
    25% {
        -webkit-transform: scale(0.1);
        opacity: 0.1
    }
    50% {
        -webkit-transform: scale(0.5);
        opacity: 0.3
    }
    75% {
        -webkit-transform: scale(0.8);
        opacity: 0.5
    }
    to {
        -webkit-transform: scale(1);
        opacity: 0.0
    }
}
.fileupload {
    overflow: hidden;
    position: relative
}
.fileupload input.upload {
    cursor: pointer;
    filter: alpha(opacity=0);
    font-size: 20px;
    margin: 0;
    opacity: 0;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0
}
.mega-dropdown {
    position: static;
    width: 100%
}
.mega-dropdown .dropdown-menu {
    width: 100%;
    padding: 30px;
    margin-top: 0px
}
.mega-dropdown ul {
    padding: 0px
}
.mega-dropdown ul li {
    list-style: none
}
.mega-dropdown .carousel-item .container {
    padding: 0px
}
.mega-dropdown .nav-accordion .card {
    margin-bottom: 1px
}
.mega-dropdown .nav-accordion .card-header {
    background: #ffffff
}
.mega-dropdown .nav-accordion .card-header h5 {
    margin: 0px
}
.mega-dropdown .nav-accordion .card-header h5 a {
    text-decoration: none;
    color: #67757c
}
ul.list-style-none {
    margin: 0px;
    padding: 0px
}
ul.list-style-none li {
    list-style: none
}
ul.list-style-none li a {
    color: #67757c;
    padding: 8px 0px;
    display: block;
    text-decoration: none
}
ul.list-style-none li a:hover {
    color: #1976d2
}
.dropdown-item {
    padding: 8px 1rem;
    color: #67757c
}
.custom-select {
    background: url("../../assets/images/custom-select.png") right 0.75rem center no-repeat
}
textarea {
    resize: none
}
.form-control {
    color: #67757c;
    min-height: 38px;
    display: initial
}
.form-control-sm {
    min-height: 20px
}
.form-control:disabled,
.form-control[readonly] {
    opacity: 0.7
}
.custom-control-input:focus~.custom-control-indicator {
    -webkit-box-shadow: none;
    box-shadow: none
}
.custom-control-input:checked~.custom-control-indicator {
    background-color: #26dad2
}
form label {
    font-weight: 400
}
.form-group {
    margin-bottom: 25px
}
.form-horizontal label {
    margin-bottom: 0px
}
.form-control-static {
    padding-top: 0px
}
.form-bordered .form-group {
    border-bottom: 1px solid rgba(120, 130, 140, 0.13);
    padding-bottom: 20px
}
.card-no-border .card {
    border: 0px;
    border-radius: 4px;
    -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05)
}
.card-no-border .shadow-none {
    -webkit-box-shadow: none;
    box-shadow: none
}
.card-outline-danger,
.card-outline-info,
.card-outline-primary,
.card-outline-success,
.card-outline-warning {
    background: #ffffff
}
.card-fullscreen {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    overflow: auto
}
.css-bar:after {
    z-index: 1
}
.css-bar>i {
    z-index: 10
}
.single-column .left-sidebar {
    display: none
}
.single-column .page-wrapper {
    margin-left: 0px
}
.fix-width {
    width: 100%;
    max-width: 1170px;
    margin: 0 auto
}
.card-default .card-header {
    background: #ffffff;
    border-bottom: 0px
}
.preloader {
    width: 100%;
    height: 100%;
    top: 0px;
    position: fixed;
    z-index: 99999;
    background: #fff
}
.preloader .cssload-speeding-wheel {
    position: absolute;
    top: calc(50% - 3.5px);
    left: calc(50% - 3.5px)
}
#main-wrapper {
    width: 100%
}
.boxed #main-wrapper {
    width: 100%;
    max-width: 1300px;
    margin: 0 auto;
    -webkit-box-shadow: 0 0 60px rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 60px rgba(0, 0, 0, 0.1)
}
.boxed #main-wrapper .sidebar-footer {
    position: absolute
}
.boxed #main-wrapper .footer {
    display: none
}
.page-wrapper {
    background: #eef5f9;
    padding-bottom: 60px
}
.container-fluid {
    padding: 0 30px 25px 30px
}
.topbar {
    position: relative;
    z-index: 50
}
.topbar .top-navbar {
    min-height: 50px;
    padding: 0px 15px 0 0
}
.topbar .top-navbar .dropdown-toggle:after {
    display: none
}
.topbar .top-navbar .navbar-header {
    line-height: 45px;
    text-align: center
}
.topbar .top-navbar .navbar-header .navbar-brand {
    margin-right: 0px;
    padding-bottom: 0px;
    padding-top: 0px
}
.topbar .top-navbar .navbar-header .navbar-brand .light-logo {
    display: none
}
.topbar .top-navbar .navbar-header .navbar-brand b {
    line-height: 60px;
    display: inline-block
}
.topbar .top-navbar .navbar-nav>.nav-item>.nav-link {
    padding-left: .75rem;
    padding-right: .75rem;
    font-size: 15px;
    line-height: 40px
}
.topbar .top-navbar .navbar-nav>.nav-item.show {
    background: rgba(0, 0, 0, 0.05)
}
.topbar .profile-pic {
    width: 30px;
    border-radius: 100%
}
.topbar .dropdown-menu {
    box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
    border-color: rgba(120, 130, 140, 0.13)
}
.topbar .dropdown-menu .dropdown-item {
    padding: 7px 1.5rem
}
.topbar ul.dropdown-user {
    padding: 0px;
    min-width: 270px
}
.topbar ul.dropdown-user li {
    list-style: none;
    padding: 0px;
    margin: 0px
}
.topbar ul.dropdown-user li.divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: rgba(120, 130, 140, 0.13)
}
.topbar ul.dropdown-user li .dw-user-box {
    padding: 10px 15px
}
.topbar ul.dropdown-user li .dw-user-box .u-img {
    width: 70px;
    display: inline-block;
    vertical-align: top
}
.topbar ul.dropdown-user li .dw-user-box .u-img img {
    width: 100%;
    border-radius: 5px
}
.topbar ul.dropdown-user li .dw-user-box .u-text {
    display: inline-block;
    padding-left: 10px
}
.topbar ul.dropdown-user li .dw-user-box .u-text h4 {
    margin: 0px;
    font-size: 15px
}
.topbar ul.dropdown-user li .dw-user-box .u-text p {
    margin-bottom: 2px;
    font-size: 12px
}
.topbar ul.dropdown-user li .dw-user-box .u-text .btn {
    color: #ffffff;
    padding: 5px 10px;
    display: inline-block
}
.topbar ul.dropdown-user li .dw-user-box .u-text .btn:hover {
    background: #e6294b
}
.topbar ul.dropdown-user li a {
    padding: 9px 15px;
    display: block;
    color: #67757c
}
.topbar ul.dropdown-user li a:hover {
    background: #f2f4f8;
    color: #1976d2;
    text-decoration: none
}
.search-box .app-search {
    position: absolute;
    margin: 0px;
    display: block;
    z-index: 110;
    width: 100%;
    top: -1px;
    -webkit-box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.2);
    box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.2);
    display: none;
    left: 0px
}
.search-box .app-search input {
    width: 100.5%;
    padding: 20px 40px 20px 20px;
    border-radius: 0px;
    font-size: 17px;
    -webkit-transition: 0.5s ease-in;
    -o-transition: 0.5s ease-in;
    transition: 0.5s ease-in
}
.search-box .app-search input:focus {
    border-color: #ffffff
}
.search-box .app-search .srh-btn {
    position: absolute;
    top: 23px;
    cursor: pointer;
    background: #ffffff;
    width: 15px;
    height: 15px;
    right: 20px;
    font-size: 14px
}
.mini-sidebar .top-navbar .navbar-header {
    width: 60px;
    text-align: center
}
.logo-center .top-navbar .navbar-header {
    position: absolute;
    left: 0;
    right: 0;
    margin: 0 auto
}
.page-titles {
    background: #ffffff;
    margin: 0 0px 30px;
    padding: 15px 10px;
    position: relative;
    z-index: 10;
    -webkit-box-shadow: 1px 0 5px rgba(0, 0, 0, 0.1);
    box-shadow: 1px 0 5px rgba(0, 0, 0, 0.1)
}
.page-titles h3 {
    margin-bottom: 0px;
    margin-top: 0px
}
.page-titles .breadcrumb {
    padding: 0px;
    background: transparent;
    font-size: 14px
}
.page-titles .breadcrumb li {
    margin-top: 0px;
    margin-bottom: 0px
}
.page-titles .breadcrumb .breadcrumb-item+.breadcrumb-item:before {
    content: "\e649";
    font-family: themify;
    color: #a6b7bf;
    font-size: 11px
}
.page-titles .breadcrumb .breadcrumb-item.active {
    color: #99abb4
}
@-webkit-keyframes rotate {
    0% {
        -webkit-transform: rotate(0deg)
    }
    to {
        -webkit-transform: rotate(360deg)
    }
}
@-moz-keyframes rotate {
    0% {
        -moz-transform: rotate(0deg)
    }
    to {
        -moz-transform: rotate(360deg)
    }
}
@keyframes rotate {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }
    to {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}
.right-side-toggle {
    position: relative
}
.right-side-toggle i {
    -webkit-transition-property: -webkit-transform;
    -webkit-transition-duration: 1s;
    -moz-transition-property: -moz-transform;
    -moz-transition-duration: 1s;
    transition-property: -webkit-transform;
    -o-transition-property: transform;
    transition-property: transform;
    transition-property: transform, -webkit-transform;
    -o-transition-duration: 1s;
    transition-duration: 1s;
    -webkit-animation-name: rotate;
    -webkit-animation-duration: 2s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    -moz-animation-name: rotate;
    -moz-animation-duration: 2s;
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: linear;
    animation-name: rotate;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    position: absolute;
    top: 18px;
    left: 18px
}
.right-sidebar {
    position: fixed;
    right: -240px;
    width: 240px;
    display: none;
    z-index: 1100;
    background: #ffffff;
    top: 0px;
    padding-bottom: 20px;
    height: 100%;
    -webkit-box-shadow: 5px 1px 40px rgba(0, 0, 0, 0.1);
    box-shadow: 5px 1px 40px rgba(0, 0, 0, 0.1);
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease
}
.right-sidebar .rpanel-title {
    display: block;
    padding: 19px 20px;
    color: #ffffff;
    text-transform: uppercase;
    font-size: 15px;
    background: #1976d2
}
.right-sidebar .rpanel-title span {
    float: right;
    cursor: pointer;
    font-size: 11px
}
.right-sidebar .rpanel-title span:hover {
    color: #ffffff
}
.right-sidebar .r-panel-body {
    padding: 20px
}
.right-sidebar .r-panel-body ul {
    margin: 0px;
    padding: 0px
}
.right-sidebar .r-panel-body ul li {
    list-style: none;
    padding: 5px 0
}
.shw-rside {
    right: 0px;
    width: 240px;
    display: block
}
.chatonline img {
    margin-right: 10px;
    float: left;
    width: 30px
}
.chatonline li a {
    padding: 13px 0;
    float: left;
    width: 100%
}
.chatonline li a span {
    color: #67757c
}
.chatonline li a span small {
    display: block;
    font-size: 10px
}
ul#themecolors {
    display: block
}
ul#themecolors li {
    display: inline-block
}
ul#themecolors li:first-child {
    display: block
}
ul#themecolors li a {
    width: 50px;
    height: 50px;
    display: inline-block;
    margin: 5px;
    color: transparent;
    position: relative
}
ul#themecolors li a.working:before {
    content: "\f00c";
    font-family: "FontAwesome";
    font-size: 18px;
    line-height: 50px;
    width: 50px;
    height: 50px;
    position: absolute;
    top: 0;
    left: 0;
    color: #ffffff;
    text-align: center
}
.default-theme {
    background: #99abb4
}
.green-theme {
    background: #26dad2
}
.yellow-theme {
    background: #ffb22b
}
.red-theme {
    background: #ef5350
}
.blue-theme {
    background: #1976d2
}
.purple-theme {
    background: #7460ee
}
.megna-theme {
    background: #00897b
}
.default-dark-theme {
    background: #263238;
    background: -moz-linear-gradient(left, #263238 0%, #263238 23%, #99abb4 23%, #99abb4 99%);
    background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #99abb4 23%, #99abb4 99%);
    background: -webkit-gradient(linear, left top, right top, from(#263238), color-stop(23%, #263238), color-stop(23%, #99abb4), color-stop(99%, #99abb4));
    background: -o-linear-gradient(left, #263238 0%, #263238 23%, #99abb4 23%, #99abb4 99%);
    background: linear-gradient(to right, #263238 0%, #263238 23%, #99abb4 23%, #99abb4 99%)
}
.green-dark-theme {
    background: #263238;
    background: -moz-linear-gradient(left, #263238 0%, #263238 23%, #26dad2 23%, #26dad2 99%);
    background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #00c292 23%, #26dad2 99%);
    background: -webkit-gradient(linear, left top, right top, from(#263238), color-stop(23%, #263238), color-stop(23%, #26dad2), color-stop(99%, #26dad2));
    background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #26dad2 23%, #26dad2 99%);
    background: -o-linear-gradient(left, #263238 0%, #263238 23%, #26dad2 23%, #26dad2 99%);
    background: linear-gradient(to right, #263238 0%, #263238 23%, #26dad2 23%, #26dad2 99%)
}
.yellow-dark-theme {
    background: #263238;
    background: -moz-linear-gradient(left, #263238 0%, #263238 23%, #ef5350 23%, #ef5350 99%);
    background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #ef5350 23%, #ef5350 99%);
    background: -webkit-gradient(linear, left top, right top, from(#263238), color-stop(23%, #263238), color-stop(23%, #ef5350), color-stop(99%, #ef5350));
    background: -o-linear-gradient(left, #263238 0%, #263238 23%, #ef5350 23%, #ef5350 99%);
    background: linear-gradient(to right, #263238 0%, #263238 23%, #ef5350 23%, #ef5350 99%)
}
.blue-dark-theme {
    background: #263238;
    background: -moz-linear-gradient(left, #263238 0%, #263238 23%, #1976d2 23%, #1976d2 99%);
    background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #1976d2 23%, #1976d2 99%);
    background: -webkit-gradient(linear, left top, right top, from(#263238), color-stop(23%, #263238), color-stop(23%, #1976d2), color-stop(99%, #1976d2));
    background: -o-linear-gradient(left, #263238 0%, #263238 23%, #1976d2 23%, #1976d2 99%);
    background: linear-gradient(to right, #263238 0%, #263238 23%, #1976d2 23%, #1976d2 99%)
}
.purple-dark-theme {
    background: #263238;
    background: -moz-linear-gradient(left, #263238 0%, #263238 23%, #7460ee 23%, #7460ee 99%);
    background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #7460ee 23%, #7460ee 99%);
    background: -webkit-gradient(linear, left top, right top, from(#263238), color-stop(23%, #263238), color-stop(23%, #7460ee), color-stop(99%, #7460ee));
    background: -o-linear-gradient(left, #263238 0%, #263238 23%, #7460ee 23%, #7460ee 99%);
    background: linear-gradient(to right, #263238 0%, #263238 23%, #7460ee 23%, #7460ee 99%)
}
.megna-dark-theme {
    background: #263238;
    background: -moz-linear-gradient(left, #263238 0%, #263238 23%, #00897b 23%, #00897b 99%);
    background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #00897b 23%, #00897b 99%);
    background: -webkit-gradient(linear, left top, right top, from(#263238), color-stop(23%, #263238), color-stop(23%, #00897b), color-stop(99%, #00897b));
    background: -o-linear-gradient(left, #263238 0%, #263238 23%, #00897b 23%, #00897b 99%);
    background: linear-gradient(to right, #263238 0%, #263238 23%, #00897b 23%, #00897b 99%)
}
.red-dark-theme {
    background: #263238;
    background: -moz-linear-gradient(left, #263238 0%, #263238 23%, #ef5350 23%, #ef5350 99%);
    background: -webkit-linear-gradient(left, #263238 0%, #263238 23%, #ef5350 23%, #ef5350 99%);
    background: -webkit-gradient(linear, left top, right top, from(#263238), color-stop(23%, #263238), color-stop(23%, #ef5350), color-stop(99%, #ef5350));
    background: -o-linear-gradient(left, #263238 0%, #263238 23%, #ef5350 23%, #ef5350 99%);
    background: linear-gradient(to right, #263238 0%, #263238 23%, #ef5350 23%, #ef5350 99%)
}
.page-titles {
    padding-bottom: 20px
}
.footer {
    bottom: 0;
    color: #67757c;
    left: 0px;
    padding: 17px 15px;
    position: absolute;
    right: 0;
    border-top: 1px solid rgba(120, 130, 140, 0.13);
    background: #ffffff
}
.card {
    margin-bottom: 30px
}
.card .card-subtitle {
    font-weight: 300;
    margin-bottom: 15px;
    color: #99abb4
}
.card-inverse .card-bodyquote .blockquote-footer,
.card-inverse .card-link,
.card-inverse .card-subtitle,
.card-inverse .card-text {
    color: rgba(255, 255, 255, 0.65)
}
.card-success {
    background: #26dad2;
    border-color: #26dad2
}
.card-danger {
    background: #ef5350;
    border-color: #ef5350
}
.card-warning {
    background: #ffb22b;
    border-color: #ffb22b
}
.card-info {
    background: #1976d2;
    border-color: #1976d2
}
.card-primary {
    background: #5c4ac7;
    border-color: #5c4ac7
}
.card-dark {
    background: #2f3d4a;
    border-color: #2f3d4a
}
.card-megna {
    background: #00897b;
    border-color: #00897b
}
.button-group .btn {
    margin-bottom: 5px;
    margin-right: 5px
}
.no-button-group .btn {
    margin-bottom: 5px;
    margin-right: 0px
}
.btn .text-active {
    display: none
}
.btn.active .text-active {
    display: inline-block
}
.btn.active .text {
    display: none
}
.card-actions {
    float: right
}
.card-actions a {
    cursor: pointer;
    color: #67757c;
    opacity: 0.7;
    padding-left: 7px;
    font-size: 13px
}
.card-actions a:hover {
    opacity: 1
}
.card-columns .card {
    margin-bottom: 20px
}
.collapsing {
    -webkit-transition: height .08s ease;
    -o-transition: height .08s ease;
    transition: height .08s ease
}
.card-info {
    background: #1976d2;
    border-color: #1976d2
}
.card-primary {
    background: #5c4ac7;
    border-color: #5c4ac7
}
.card-outline-info {
    border-color: #1976d2
}
.card-outline-info .card-header {
    background: #1976d2;
    border-color: #1976d2
}
.card-outline-inverse {
    border-color: #2f3d4a
}
.card-outline-inverse .card-header {
    background: #2f3d4a;
    border-color: #2f3d4a
}
.card-outline-warning {
    border-color: #ffb22b
}
.card-outline-warning .card-header {
    background: #ffb22b;
    border-color: #ffb22b
}
.card-outline-success {
    border-color: #26dad2
}
.card-outline-success .card-header {
    background: #26dad2;
    border-color: #26dad2
}
.card-outline-danger {
    border-color: #ef5350
}
.card-outline-danger .card-header {
    background: #ef5350;
    border-color: #ef5350
}
.card-outline-primary {
    border-color: #5c4ac7
}
.card-outline-primary .card-header {
    background: #5c4ac7;
    border-color: #5c4ac7
}
.bc-colored .breadcrumb-item,
.bc-colored .breadcrumb-item a {
    color: #ffffff
}
.bc-colored .breadcrumb-item.active,
.bc-colored .breadcrumb-item a.active {
    opacity: 0.7
}
.bc-colored .breadcrumb-item+.breadcrumb-item:before {
    color: rgba(255, 255, 255, 0.4)
}
.breadcrumb {
    margin-bottom: 0px
}
ul.list-icons {
    margin: 0px;
    padding: 0px
}
ul.list-icons li {
    list-style: none;
    line-height: 30px;
    margin: 5px 0;
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in
}
ul.list-icons li a {
    color: #67757c
}
ul.list-icons li a:hover {
    color: #1976d2
}
ul.list-icons li i {
    font-size: 13px;
    padding-right: 8px
}
ul.list-inline li {
    display: inline-block;
    padding: 0 8px
}
ul.two-part {
    margin: 0px
}
ul.two-part li {
    width: 48.8%
}
html body .accordion .card {
    margin-bottom: 0px
}
.flot-chart {
    display: block;
    height: 400px
}
.flot-chart-content {
    width: 100%;
    height: 100%
}
html body .flotTip,
html body .jqstooltip {
    width: auto!important;
    height: auto!important;
    background: #263238;
    color: #ffffff;
    padding: 5px 10px
}
body .jqstooltip {
    border-color: transparent;
    border-radius: 60px
}
.chart {
    position: relative;
    display: inline-block;
    width: 100px;
    height: 100px;
    margin-top: 20px;
    margin-bottom: 20px;
    text-align: center
}
.chart canvas {
    position: absolute;
    top: 0;
    left: 0
}
.chart.chart-widget-pie {
    margin-top: 5px;
    margin-bottom: 5px
}
.pie-chart>span {
    left: 0;
    margin-top: -2px;
    position: absolute;
    right: 0;
    text-align: center;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%)
}
.chart>span>img {
    left: 0;
    margin-top: -2px;
    position: absolute;
    right: 0;
    text-align: center;
    top: 50%;
    width: 60%;
    height: 60%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    margin: 0 auto
}
.percent {
    display: inline-block;
    line-height: 100px;
    z-index: 2;
    font-weight: 600;
    font-size: 18px;
    color: #263238
}
.percent:after {
    content: '%';
    margin-left: 0.1em;
    font-size: .8em
}
.ct-charts {
    position: relative
}
.amp-pxl {
    position: relative
}
.amp-pxl .ct-series-a .ct-bar {
    stroke: #1976d2
}
.amp-pxl .ct-series-b .ct-bar {
    stroke: #26dad2
}
.c3-chart-arcs-title,
.c3-legend-item {
    font-family: "Poppins", sans-serif;
    fill: #67757c
}
html body #visitor .c3-chart-arcs-title {
    font-size: 18px;
    fill: #99abb4
}
.stylish-table thead th {
    font-weight: 400;
    color: #99abb4;
    border: 0px;
    border-bottom: 1px
}
.stylish-table tbody tr {
    border-left: 4px solid #ffffff
}
.stylish-table tbody tr.active,
.stylish-table tbody tr:hover {
    border-left: 4px solid #1976d2
}
.stylish-table tbody td {
    vertical-align: middle
}
.stylish-table tbody td h6 {
    font-weight: 500;
    margin-bottom: 0px;
    white-space: nowrap
}
.stylish-table tbody td small {
    line-height: 12px;
    white-space: nowrap
}
.campaign {
    height: 280px
}
.campaign .ct-series-a .ct-area {
    fill-opacity: 0.2;
    fill: url("style.css#gradient")
}
.campaign .ct-series-a .ct-line,
.campaign .ct-series-a .ct-point {
    stroke: #26dad2;
    stroke-width: 2px
}
.campaign .ct-series-b .ct-area {
    fill: #1976d2;
    fill-opacity: 0.1
}
.campaign .ct-series-b .ct-line,
.campaign .ct-series-b .ct-point {
    stroke: #1976d2;
    stroke-width: 2px
}
.campaign .ct-series-a .ct-point,
.campaign .ct-series-b .ct-point {
    stroke-width: 6px
}
.campaign2 .ct-series-a .ct-area {
    fill-opacity: 0.2;
    fill: url("style.css#gradient")
}
.campaign2 .ct-series-a .ct-line,
.campaign2 .ct-series-a .ct-point {
    stroke: #26dad2;
    stroke-width: 2px
}
.campaign2 .ct-series-b .ct-area {
    fill: #1976d2;
    fill-opacity: 0.1
}
.campaign2 .ct-series-b .ct-line,
.campaign2 .ct-series-b .ct-point {
    stroke: #1976d2;
    stroke-width: 2px
}
.campaign2 .ct-series-a .ct-point,
.campaign2 .ct-series-b .ct-point {
    stroke-width: 6px
}
.usage .ct-series-a .ct-line {
    stroke-width: 3px;
    stroke: rgba(255, 255, 255, 0.5)
}
.total-sales {
    position: relative
}
.total-sales .chartist-tooltip {
    background: #2f3d4a
}
.total-sales .ct-series-a .ct-bar {
    stroke: #1976d2
}
.total-sales .ct-series-b .ct-bar {
    stroke: #26dad2
}
.total-sales .ct-series-c .ct-bar {
    stroke: #ef5350
}
.ct-chart {
    position: relative
}
.ct-chart .ct-series-a .ct-slice-donut {
    stroke: #26dad2
}
.ct-chart .ct-series-b .ct-slice-donut {
    stroke: #f2f4f8
}
.ct-chart .ct-series-c .ct-slice-donut {
    stroke: #1976d2
}
#visitfromworld path.jvectormap-region.jvectormap-element {
    stroke-width: 1px;
    stroke: #99abb4
}
.jvectormap-goback,
.jvectormap-zoomin,
.jvectormap-zoomout {
    background: #99abb4
}
.browser td {
    vertical-align: middle;
    padding-left: 0px
}
#calendar .fc-today-button {
    display: none
}
.calender-sidebar {
    background: rgba(0, 0, 0, 0.02)
}
.ecomm-donute svg text {
    font-family: "Poppins", sans-serif!important;
    font-size: 12px!important;
    font-weight: 500!important
}
.total-revenue4 {
    position: relative
}
.total-revenue4 .ct-series-a .ct-line {
    stroke: #1976d2;
    stroke-width: 1px
}
.total-revenue4 .ct-series-a .ct-point {
    stroke: #1976d2;
    stroke-width: 5px
}
.total-revenue4 .ct-series-b .ct-line {
    stroke: #26dad2;
    stroke-width: 1px
}
.total-revenue4 .ct-series-b .ct-point {
    stroke: #26dad2;
    stroke-width: 5px
}
.total-revenue4 .ct-series-a .ct-area {
    fill: #1976d2;
    fill-opacity: 0.2
}
.total-revenue4 .ct-series-b .ct-area {
    fill: #26dad2;
    fill-opacity: 0.2
}
.product-overview.table tbody tr td {
    vertical-align: middle
}
.sparkchart {
    margin-bottom: -2px
}
.btn-file {
    overflow: hidden;
    position: relative;
    vertical-align: middle
}
.btn-file>input {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    opacity: 0;
    filter: alpha(opacity=0);
    font-size: 23px;
    height: 100%;
    width: 100%;
    direction: ltr;
    cursor: pointer;
    border-radius: 0px
}
.fileinput .input-group-addon {
    border: none;
    border-bottom: 1px solid rgba(120, 130, 140, 0.13);
    background: #ffffff;
    margin-bottom: 1px
}
.fileinput .form-control {
    padding-top: 7px;
    padding-bottom: 5px;
    display: inline-block;
    margin-bottom: 0px;
    vertical-align: middle;
    cursor: text
}
.fileinput .thumbnail {
    overflow: hidden;
    display: inline-block;
    margin-bottom: 5px;
    vertical-align: middle;
    text-align: center
}
.fileinput .thumbnail>img {
    max-height: 100%
}
.fileinput .btn {
    vertical-align: middle
}
.fileinput-exists .fileinput-new,
.fileinput-new .fileinput-exists {
    display: none
}
.fileinput-inline .fileinput-controls {
    display: inline
}
.fileinput-filename {
    vertical-align: middle;
    display: inline-block;
    overflow: hidden
}
.form-control .fileinput-filename {
    vertical-align: bottom
}
.fileinput.input-group>* {
    position: relative;
    z-index: 2
}
.fileinput.input-group>.btn-file {
    z-index: 1
}
.product-review {
    margin: 0px;
    padding: 25px
}
.product-review li {
    display: block;
    padding: 20px 0;
    list-style: none
}
.product-review li .font,
.product-review li span {
    display: inline-block;
    margin-left: 10px
}
.social-profile {
    text-align: center;
    background: rgba(7, 10, 43, 0.8)
}
.customtab li a.nav-link,
.profile-tab li a.nav-link {
    border: 0px;
    padding: 15px 20px;
    color: #67757c
}
.customtab li a.nav-link.active,
.profile-tab li a.nav-link.active {
    border-bottom: 2px solid #1976d2;
    color: #1976d2
}
.customtab li a.nav-link:hover,
.profile-tab li a.nav-link:hover {
    color: #1976d2
}
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 100%
}
.bootstrap-select .dropdown-menu li a {
    display: block;
    padding: 7px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #67757c;
    white-space: nowrap
}
.bootstrap-select .dropdown-menu li a:focus,
.bootstrap-select .dropdown-menu li a:hover {
    color: #1976d2;
    background: #f2f4f8
}
.bootstrap-select .show>.dropdown-menu {
    display: block
}
.bootstrap-select .dropdown-toggle.bs-placeholder:hover {
    color: #ffffff
}
.bootstrap-touchspin .input-group-btn-vertical>.btn {
    padding: 9px 10px
}
.select2-container--default .select2-selection--single {
    border-color: #b1b8bb;
    height: 38px
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 38px
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 33px
}
.input-form .btn {
    padding: 8px 12px
}
.form-material .form-group {
    overflow: hidden
}
.form-material .form-control {
    background-color: transparent;
    background-position: center bottom, center calc(100% - 1px);
    background-repeat: no-repeat;
    background-size: 0 2px, 100% 1px;
    padding: 0;
    -webkit-transition: background 0s ease-out 0s;
    -o-transition: background 0s ease-out 0s;
    transition: background 0s ease-out 0s
}
.form-material .form-control,
.form-material .form-control.focus,
.form-material .form-control:focus {
    background-image: -webkit-gradient(linear, left top, left bottom, from(#1976d2), to(#1976d2)), -webkit-gradient(linear, left top, left bottom, from(rgba(120, 130, 140, 0.13)), to(rgba(120, 130, 140, 0.13)));
    background-image: -webkit-linear-gradient(#1976d2, #1976d2), -webkit-linear-gradient(rgba(120, 130, 140, 0.13), rgba(120, 130, 140, 0.13));
    background-image: -o-linear-gradient(#1976d2, #1976d2), -o-linear-gradient(rgba(120, 130, 140, 0.13), rgba(120, 130, 140, 0.13));
    background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(rgba(120, 130, 140, 0.13), rgba(120, 130, 140, 0.13));
    border: 0 none;
    border-radius: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    float: none
}
.form-material .form-control.focus,
.form-material .form-control:focus {
    background-size: 100% 2px, 100% 1px;
    outline: 0 none;
    -webkit-transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    transition-duration: 0.3s
}
.form-control-line .form-group {
    overflow: hidden
}
.form-control-line .form-control {
    border: 0px;
    border-radius: 0px;
    padding-left: 0px;
    border-bottom: 1px solid rgba(120, 130, 140, 0.13)
}
.form-control-line .form-control:focus {
    border-bottom: 1px solid #1976d2
}
.floating-labels .form-group {
    position: relative
}
.floating-labels .form-control {
    padding: 10px 10px 10px 0;
    display: block;
    border: none;
    font-family: "Poppins", sans-serif;
    border-radius: 0px;
    border-bottom: 1px solid rgba(120, 130, 140, 0.13)
}
.floating-labels select.form-control>option {
    font-size: 14px
}
.floating-labels .has-error .form-control {
    border-bottom: 1px solid #ef5350
}
.floating-labels .has-warning .form-control {
    border-bottom: 1px solid #ffb22b
}
.floating-labels .has-success .form-control {
    border-bottom: 1px solid #26dad2
}
.floating-labels .form-control:focus {
    outline: none;
    border: none
}
.floating-labels label {
    color: #67757c;
    position: absolute;
    cursor: auto;
    top: 5px;
    -o-transition: 0.2s ease all;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all
}
.floating-labels .focused label {
    top: -20px;
    font-size: 12px;
    color: #263238
}
.floating-labels .bar {
    position: relative;
    display: block
}
.floating-labels .bar:after,
.floating-labels .bar:before {
    content: '';
    height: 2px;
    width: 0;
    bottom: 1px;
    position: absolute;
    background: #1976d2;
    -o-transition: 0.2s ease all;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all
}
.floating-labels .bar:before {
    left: 50%
}
.floating-labels .bar:after {
    right: 50%
}
.floating-labels .form-control:focus~.bar:after,
.floating-labels .form-control:focus~.bar:before {
    width: 50%
}
.floating-labels .highlight {
    position: absolute;
    height: 60%;
    width: 100px;
    top: 25%;
    left: 0;
    pointer-events: none;
    opacity: 0.5
}
.floating-labels .input-lg,
.floating-labels .input-lg~label {
    font-size: 24px
}
.floating-labels .input-sm,
.floating-labels .input-sm~label {
    font-size: 16px
}
.has-warning .bar:after,
.has-warning .bar:before {
    background: #ffb22b
}
.has-success .bar:after,
.has-success .bar:before {
    background: #26dad2
}
.has-error .bar:after,
.has-error .bar:before {
    background: #ef5350
}
.has-warning .form-control:focus~label,
.has-warning .form-control:valid~label {
    color: #ffb22b
}
.has-success .form-control:focus~label,
.has-success .form-control:valid~label {
    color: #26dad2
}
.has-error .form-control:focus~label,
.has-error .form-control:valid~label {
    color: #ef5350
}
.has-feedback label~.t-0 {
    top: 0
}
.form-group.error input,
.form-group.error select,
.form-group.error textarea {
    border: 1px solid #ef5350
}
.form-group.validate input,
.form-group.validate select,
.form-group.validate textarea {
    border: 1px solid #26dad2
}
.form-group.error .help-block ul {
    padding: 0px;
    color: #ef5350
}
.form-group.error .help-block ul li {
    list-style: none
}
.form-group.issue .help-block ul {
    padding: 0px;
    color: #ffb22b
}
.form-group.issue .help-block ul li {
    list-style: none
}
.pagination-circle li.active a {
    background: #26dad2
}
.pagination-circle li a {
    width: 40px;
    height: 40px;
    background: #f2f4f8;
    border: 0px;
    text-align: center;
    border-radius: 100%
}
.pagination-circle li a:first-child,
.pagination-circle li a:last-child {
    border-radius: 100%
}
.pagination-circle li a:hover {
    background: #26dad2;
    color: #ffffff
}
.pagination-circle li.disabled a {
    background: #f2f4f8;
    color: rgba(120, 130, 140, 0.13)
}
.dropzone {
    border: 1px dashed #b1b8bb
}
.dropzone .dz-message {
    padding: 5% 0;
    margin: 0px
}
.asColorPicker-dropdown {
    max-width: 260px
}
.asColorPicker-trigger {
    position: absolute;
    top: 0;
    right: -35px;
    height: 38px;
    width: 37px;
    border: 0
}
.asColorPicker-clear {
    display: none;
    position: absolute;
    top: 5px;
    right: 10px;
    text-decoration: none
}
table th {
    font-weight: 400
}
.daterangepicker td.active,
.daterangepicker td.active:hover {
    background-color: #1976d2
}
.datepicker table tr td.today,
.datepicker table tr td.today.disabled,
.datepicker table tr td.today.disabled:hover,
.datepicker table tr td.today:hover {
    background: #1976d2;
    color: #ffffff
}
.datepicker td,
.datepicker th {
    padding: 5px 10px
}
.icheck-list,
.icolors {
    padding: 0;
    margin: 0;
    list-style: none
}
.icolors>li {
    padding: 0;
    margin: 2px;
    float: left;
    display: inline-block;
    height: 30px;
    width: 30px;
    background: #263238;
    text-align: center
}
.icolors>li.active:after {
    content: "\2713 ";
    color: #ffffff;
    line-height: 30px
}
.icolors>li:first-child {
    margin-left: 0
}
.icolors>li.orange {
    background: #ef5350
}
.icolors>li.yellow {
    background: #ffb22b
}
.icolors>li.info {
    background: #1976d2
}
.icolors>li.green {
    background: #26dad2
}
.icolors>li.red {
    background: #fb3a3a
}
.icolors>li.purple {
    background: #7460ee
}
.icolors>li.blue {
    background: #02bec9
}
.icheck-list {
    float: left;
    padding-right: 50px;
    padding-top: 10px
}
.icheck-list li {
    padding-bottom: 5px
}
.icheck-list li label {
    padding-left: 10px
}
.note-icon-caret,
.note-popover {
    display: none
}
.note-editor.note-frame {
    border: 1px solid #b1b8bb
}
.note-editor.note-frame .panel-heading {
    padding: 6px 10px 10px;
    border-bottom: 1px solid rgba(120, 130, 140, 0.13)
}
.label {
    display: inline-block
}
.table th,
.table thead th {
    border: 0px
}
.color-table.primary-table thead th {
    background-color: #5c4ac7;
    color: #ffffff
}
.table-striped tbody tr:nth-of-type(odd) {
    background: #f2f4f8
}
.color-table.success-table thead th {
    background-color: #26dad2;
    color: #ffffff
}
.color-table.info-table thead th {
    background-color: #1976d2;
    color: #ffffff
}
.color-table.warning-table thead th {
    background-color: #ffb22b;
    color: #ffffff
}
.color-table.danger-table thead th {
    background-color: #ef5350;
    color: #ffffff
}
.color-table.inverse-table thead th {
    background-color: #2f3d4a;
    color: #ffffff
}
.color-table.dark-table thead th {
    background-color: #263238;
    color: #ffffff
}
.color-table.red-table thead th {
    background-color: #fb3a3a;
    color: #ffffff
}
.color-table.purple-table thead th {
    background-color: #7460ee;
    color: #ffffff
}
.color-table.muted-table thead th {
    background-color: #99abb4;
    color: #ffffff
}
.color-bordered-table.primary-bordered-table {
    border: 2px solid #5c4ac7
}
.color-bordered-table.primary-bordered-table thead th {
    background-color: #5c4ac7;
    color: #ffffff
}
.color-bordered-table.success-bordered-table {
    border: 2px solid #26dad2
}
.color-bordered-table.success-bordered-table thead th {
    background-color: #26dad2;
    color: #ffffff
}
.color-bordered-table.info-bordered-table {
    border: 2px solid #1976d2
}
.color-bordered-table.info-bordered-table thead th {
    background-color: #1976d2;
    color: #ffffff
}
.color-bordered-table.warning-bordered-table {
    border: 2px solid #ffb22b
}
.color-bordered-table.warning-bordered-table thead th {
    background-color: #ffb22b;
    color: #ffffff
}
.color-bordered-table.danger-bordered-table {
    border: 2px solid #ef5350
}
.color-bordered-table.danger-bordered-table thead th {
    background-color: #ef5350;
    color: #ffffff
}
.color-bordered-table.inverse-bordered-table {
    border: 2px solid #2f3d4a
}
.color-bordered-table.inverse-bordered-table thead th {
    background-color: #2f3d4a;
    color: #ffffff
}
.color-bordered-table.dark-bordered-table {
    border: 2px solid #263238
}
.color-bordered-table.dark-bordered-table thead th {
    background-color: #263238;
    color: #ffffff
}
.color-bordered-table.red-bordered-table {
    border: 2px solid #fb3a3a
}
.color-bordered-table.red-bordered-table thead th {
    background-color: #fb3a3a;
    color: #ffffff
}
.color-bordered-table.purple-bordered-table {
    border: 2px solid #7460ee
}
.color-bordered-table.purple-bordered-table thead th {
    background-color: #7460ee;
    color: #ffffff
}
.color-bordered-table.muted-bordered-table {
    border: 2px solid #99abb4
}
.color-bordered-table.muted-bordered-table thead th {
    background-color: #99abb4;
    color: #ffffff
}
.full-color-table.full-primary-table {
    background-color: #f1effd
}
.full-color-table.full-primary-table thead th {
    background-color: #5c4ac7;
    border: 0;
    color: #ffffff
}
.full-color-table.full-primary-table tbody td {
    border: 0
}
.full-color-table.full-primary-table tr:hover {
    background-color: #5c4ac7;
    color: #ffffff
}
.full-color-table.full-success-table {
    background-color: #e8fdeb
}
.full-color-table.full-success-table thead th {
    background-color: #26dad2;
    border: 0;
    color: #ffffff
}
.full-color-table.full-success-table tbody td {
    border: 0
}
.full-color-table.full-success-table tr:hover {
    background-color: #26dad2;
    color: #ffffff
}
.full-color-table.full-info-table {
    background-color: #cfecfe
}
.full-color-table.full-info-table thead th {
    background-color: #1976d2;
    border: 0;
    color: #ffffff
}
.full-color-table.full-info-table tbody td {
    border: 0
}
.full-color-table.full-info-table tr:hover {
    background-color: #1976d2;
    color: #ffffff
}
.full-color-table.full-warning-table {
    background-color: #fff8ec
}
.full-color-table.full-warning-table thead th {
    background-color: #ffb22b;
    border: 0;
    color: #ffffff
}
.full-color-table.full-warning-table tbody td {
    border: 0
}
.full-color-table.full-warning-table tr:hover {
    background-color: #ffb22b;
    color: #ffffff
}
.full-color-table.full-danger-table {
    background-color: #f9e7eb
}
.full-color-table.full-danger-table thead th {
    background-color: #ef5350;
    border: 0;
    color: #ffffff
}
.full-color-table.full-danger-table tbody td {
    border: 0
}
.full-color-table.full-danger-table tr:hover {
    background-color: #ef5350;
    color: #ffffff
}
.full-color-table.full-inverse-table {
    background-color: #f6f6f6
}
.full-color-table.full-inverse-table thead th {
    background-color: #2f3d4a;
    border: 0;
    color: #ffffff
}
.full-color-table.full-inverse-table tbody td {
    border: 0
}
.full-color-table.full-inverse-table tr:hover {
    background-color: #2f3d4a;
    color: #ffffff
}
.full-color-table.full-dark-table {
    background-color: rgba(43, 43, 43, 0.8)
}
.full-color-table.full-dark-table thead th {
    background-color: #263238;
    border: 0;
    color: #ffffff
}
.full-color-table.full-dark-table tbody td {
    border: 0;
    color: #ffffff
}
.full-color-table.full-dark-table tr:hover {
    background-color: #263238;
    color: #ffffff
}
.full-color-table.full-red-table {
    background-color: #f9e7eb
}
.full-color-table.full-red-table thead th {
    background-color: #fb3a3a;
    border: 0;
    color: #ffffff
}
.full-color-table.full-red-table tbody td {
    border: 0
}
.full-color-table.full-red-table tr:hover {
    background-color: #fb3a3a;
    color: #ffffff
}
.full-color-table.full-purple-table {
    background-color: #f1effd
}
.full-color-table.full-purple-table thead th {
    background-color: #7460ee;
    border: 0;
    color: #ffffff
}
.full-color-table.full-purple-table tbody td {
    border: 0
}
.full-color-table.full-purple-table tr:hover {
    background-color: #7460ee;
    color: #ffffff
}
.full-color-table.full-muted-table {
    background-color: rgba(152, 166, 173, 0.2)
}
.full-color-table.full-muted-table thead th {
    background-color: #99abb4;
    border: 0;
    color: #ffffff
}
.full-color-table.full-muted-table tbody td {
    border: 0
}
.full-color-table.full-muted-table tr:hover {
    background-color: #99abb4;
    color: #ffffff
}
.dataTables_wrapper {
    padding-top: 10px
}
.dt-buttons {
    display: inline-block;
    padding-top: 5px;
    margin-bottom: 15px
}
.dt-buttons .dt-button {
    padding: 5px 15px;
    border-radius: 4px;
    background: #1976d2;
    color: #ffffff;
    margin-right: 3px
}
.dt-buttons .dt-button:hover {
    background: #2f3d4a
}
.dataTables_info,
.dataTables_length {
    display: inline-block
}
.dataTables_length {
    margin-top: 10px
}
.dataTables_length select {
    border: 0;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#1976d2), to(#1976d2)), -webkit-gradient(linear, left top, left bottom, from(#b1b8bb), to(#b1b8bb));
    background-image: -webkit-linear-gradient(#1976d2, #1976d2), -webkit-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: -o-linear-gradient(#1976d2, #1976d2), -o-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(#b1b8bb, #b1b8bb);
    background-size: 0 2px, 100% 1px;
    background-repeat: no-repeat;
    background-position: center bottom, center calc(100% - 1px);
    background-color: transparent;
    -webkit-transition: background 0s ease-out;
    -o-transition: background 0s ease-out;
    transition: background 0s ease-out;
    padding-bottom: 5px
}
.dataTables_length select:focus {
    outline: none;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#1976d2), to(#1976d2)), -webkit-gradient(linear, left top, left bottom, from(#b1b8bb), to(#b1b8bb));
    background-image: -webkit-linear-gradient(#1976d2, #1976d2), -webkit-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: -o-linear-gradient(#1976d2, #1976d2), -o-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(#b1b8bb, #b1b8bb);
    background-size: 100% 2px, 100% 1px;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    transition-duration: 0.3s
}
.dataTables_filter {
    float: right;
    margin-top: 10px
}
.dataTables_filter input {
    border: 0;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#1976d2), to(#1976d2)), -webkit-gradient(linear, left top, left bottom, from(#b1b8bb), to(#b1b8bb));
    background-image: -webkit-linear-gradient(#1976d2, #1976d2), -webkit-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: -o-linear-gradient(#1976d2, #1976d2), -o-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(#b1b8bb, #b1b8bb);
    background-size: 0 2px, 100% 1px;
    background-repeat: no-repeat;
    background-position: center bottom, center calc(100% - 1px);
    background-color: transparent;
    -webkit-transition: background 0s ease-out;
    -o-transition: background 0s ease-out;
    transition: background 0s ease-out;
    float: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 0;
    margin-left: 10px
}
.dataTables_filter input:focus {
    outline: none;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#1976d2), to(#1976d2)), -webkit-gradient(linear, left top, left bottom, from(#b1b8bb), to(#b1b8bb));
    background-image: -webkit-linear-gradient(#1976d2, #1976d2), -webkit-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: -o-linear-gradient(#1976d2, #1976d2), -o-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(#b1b8bb, #b1b8bb);
    background-size: 100% 2px, 100% 1px;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    transition-duration: 0.3s
}
table.dataTable thead .sorting,
table.dataTable thead .sorting_asc,
table.dataTable thead .sorting_asc_disabled,
table.dataTable thead .sorting_desc,
table.dataTable thead .sorting_desc_disabled {
    background: transparent
}
table.dataTable thead .sorting_asc:after {
    content: "\f0de";
    margin-left: 10px;
    font-family: fontawesome;
    cursor: pointer
}
table.dataTable thead .sorting_desc:after {
    content: "\f0dd";
    margin-left: 10px;
    font-family: fontawesome;
    cursor: pointer
}
table.dataTable thead .sorting:after {
    content: "\f0dc";
    margin-left: 10px;
    font-family: fontawesome!important;
    cursor: pointer;
    color: rgba(50, 50, 50, 0.5)
}
.dataTables_wrapper .dataTables_paginate {
    float: right;
    text-align: right;
    padding-top: 0.25em
}
.dataTables_wrapper .dataTables_paginate .paginate_button {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    display: inline-block;
    min-width: 1.5em;
    padding: 0.5em 1em;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    *cursor: hand;
    color: #67757c;
    border: 1px solid #ddd
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current,
.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
    color: #ffffff!important;
    border: 1px solid #1976d2;
    background-color: #1976d2
}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active,
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover {
    cursor: default;
    color: #67757c;
    border: 1px solid #ddd;
    background: transparent;
    -webkit-box-shadow: none;
    box-shadow: none
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    color: white;
    border: 1px solid #1976d2;
    background-color: #1976d2
}
.dataTables_wrapper .dataTables_paginate .paginate_button:active {
    outline: none;
    background-color: #67757c
}
.dataTables_wrapper .dataTables_paginate .ellipsis {
    padding: 0 1em
}
.tablesaw-bar .btn-group label {
    color: #67757c!important
}
.dt-bootstrap {
    display: block
}
.paging_simple_numbers .pagination .paginate_button {
    padding: 0px;
    background: #ffffff
}
.paging_simple_numbers .pagination .paginate_button:hover {
    background: #ffffff
}
.paging_simple_numbers .pagination .paginate_button a {
    padding: 2px 10px;
    border: 0px
}
.paging_simple_numbers .pagination .paginate_button.active a,
.paging_simple_numbers .pagination .paginate_button:hover a {
    background: #1976d2;
    color: #ffffff
}
#demo-show-entries {
    border: 0;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#1976d2), to(#1976d2)), -webkit-gradient(linear, left top, left bottom, from(#b1b8bb), to(#b1b8bb));
    background-image: -webkit-linear-gradient(#1976d2, #1976d2), -webkit-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: -o-linear-gradient(#1976d2, #1976d2), -o-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(#b1b8bb, #b1b8bb);
    background-size: 0 2px, 100% 1px;
    background-repeat: no-repeat;
    background-position: center bottom, center calc(100% - 1px);
    background-color: transparent;
    -webkit-transition: background 0s ease-out;
    -o-transition: background 0s ease-out;
    transition: background 0s ease-out;
    padding-bottom: 5px;
    color: #67757c
}
#demo-show-entries:focus {
    outline: none;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#1976d2), to(#1976d2)), -webkit-gradient(linear, left top, left bottom, from(#b1b8bb), to(#b1b8bb));
    background-image: -webkit-linear-gradient(#1976d2, #1976d2), -webkit-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: -o-linear-gradient(#1976d2, #1976d2), -o-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(#b1b8bb, #b1b8bb);
    background-size: 100% 2px, 100% 1px;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    transition-duration: 0.3s
}
#demo-input-search2 {
    border: 0;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#1976d2), to(#1976d2)), -webkit-gradient(linear, left top, left bottom, from(#b1b8bb), to(#b1b8bb));
    background-image: -webkit-linear-gradient(#1976d2, #1976d2), -webkit-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: -o-linear-gradient(#1976d2, #1976d2), -o-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(#b1b8bb, #b1b8bb);
    background-size: 0 2px, 100% 1px;
    background-repeat: no-repeat;
    background-position: center bottom, center calc(100% - 1px);
    background-color: transparent;
    -webkit-transition: background 0s ease-out;
    -o-transition: background 0s ease-out;
    transition: background 0s ease-out;
    float: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 0;
    margin-left: 10px;
    color: #67757c
}
#demo-input-search2:focus {
    outline: none;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#1976d2), to(#1976d2)), -webkit-gradient(linear, left top, left bottom, from(#b1b8bb), to(#b1b8bb));
    background-image: -webkit-linear-gradient(#1976d2, #1976d2), -webkit-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: -o-linear-gradient(#1976d2, #1976d2), -o-linear-gradient(#b1b8bb, #b1b8bb);
    background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(#b1b8bb, #b1b8bb);
    background-size: 100% 2px, 100% 1px;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    transition-duration: 0.3s
}
.footable .pagination li a {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #0275d8;
    background-color: #ffffff;
    border: 1px solid #ddd
}
.footable .pagination li.active a {
    z-index: 2;
    color: #fff;
    background-color: #0275d8;
    border-color: #0275d8
}
.footable .pagination li.disabled a {
    color: #636c72;
    pointer-events: none;
    cursor: not-allowed;
    background-color: #ffffff;
    border-color: #ddd
}
.footable .pagination li:first-child a {
    margin-left: 0;
    border-bottom-left-radius: .25rem;
    border-top-left-radius: .25rem
}
.footable-odd {
    background: #f2f4f8
}
.icon-list-demo div {
    cursor: pointer;
    line-height: 60px;
    white-space: nowrap;
    color: #67757c
}
.icon-list-demo div:hover {
    color: #263238
}
.icon-list-demo div p {
    margin: 10px 0;
    padding: 5px 0
}
.icon-list-demo i {
    -webkit-transition: all 0.2s;
    -webkit-transition: font-size .2s;
    display: inline-block;
    font-size: 18px;
    margin: 0 15px 0 10px;
    text-align: left;
    -o-transition: all 0.2s;
    transition: all 0.2s;
    -o-transition: font-size .2s;
    transition: font-size .2s;
    vertical-align: middle;
    -webkit-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s
}
.icon-list-demo .col-3,
.icon-list-demo .col-md-4 {
    border-radius: 4px
}
.icon-list-demo .col-3:hover,
.icon-list-demo .col-md-4:hover {
    background-color: #ebf3f5
}
.icon-list-demo .div:hover i {
    font-size: 2em
}
.material-icon-list-demo .mdi {
    font-size: 21px
}
.grid-stack-item-content {
    background: #fff;
    color: #2b2b2b;
    text-align: center;
    font-size: 20px
}
.grid-stack>.grid-stack-item>.grid-stack-item-content {
    border: 1px solid rgba(120, 130, 140, 0.13)
}
.bootstrap-switch,
.bootstrap-switch .bootstrap-switch-container {
    border-radius: 2px
}
.bootstrap-switch .bootstrap-switch-handle-on {
    border-bottom-left-radius: 2px;
    border-top-left-radius: 2px
}
.bootstrap-switch .bootstrap-switch-handle-off {
    border-bottom-right-radius: 2px;
    border-top-right-radius: 2px
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-primary,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-primary {
    color: #ffffff;
    background: #5c4ac7
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-info,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-info {
    color: #ffffff;
    background: #1976d2
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-success,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-success {
    color: #ffffff;
    background: #26dad2
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-warning,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-warning {
    color: #ffffff;
    background: #ffb22b
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-danger,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-danger {
    color: #ffffff;
    background: #ef5350
}
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-default,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-default {
    color: #263238;
    background: #f2f4f8
}
.onoffswitch {
    position: relative;
    width: 90px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none
}
.onoffswitch-checkbox {
    display: none
}
.onoffswitch-label {
    display: block;
    overflow: hidden;
    cursor: pointer;
    border: 2px solid #26dad2;
    border-radius: 20px
}
.onoffswitch-inner {
    display: block;
    width: 200%;
    margin-left: -100%;
    -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s;
    transition: margin 0.3s ease-in 0s
}
.onoffswitch-inner:after,
.onoffswitch-inner:before {
    display: block;
    float: left;
    width: 50%;
    height: 30px;
    padding: 0;
    line-height: 30px;
    font-size: 14px;
    color: white;
    -webkit-box-sizing: border-box;
    box-sizing: border-box
}
.onoffswitch-inner:before {
    content: "ON";
    padding-left: 27px;
    background-color: #26dad2;
    color: #FFFFFF
}
.onoffswitch-inner:after {
    content: "OFF";
    padding-right: 24px;
    background-color: #EEEEEE;
    color: #999999;
    text-align: right
}
.onoffswitch-switch {
    display: block;
    width: 23px;
    margin: 6px;
    background: #FFFFFF;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 56px;
    border: 2px solid #26dad2;
    border-radius: 20px;
    -webkit-transition: all 0.3s ease-in 0s;
    -o-transition: all 0.3s ease-in 0s;
    transition: all 0.3s ease-in 0s
}
.onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-inner {
    margin-left: 0
}
.onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-switch {
    right: 0px
}
.dp-selected[style] {
    background-color: #1976d2!important
}
.datepaginator-lg .pagination li a,
.datepaginator-sm .pagination li a,
.datepaginator .pagination li a {
    padding: 0 5px;
    height: 60px;
    border: 1px solid rgba(120, 130, 140, 0.13);
    float: left;
    position: relative
}
.model_img {
    cursor: pointer
}
.show-grid {
    margin-bottom: 10px;
    padding: 0 15px
}
.show-grid [class^=col-] {
    padding-top: 10px;
    padding-bottom: 10px;
    border: 1px solid #b1b8bb;
    background-color: #f2f4f8
}
.vtabs {
    display: table
}
.vtabs .tabs-vertical {
    width: 150px;
    border-bottom: 0px;
    border-right: 1px solid rgba(120, 130, 140, 0.13);
    display: table-cell;
    vertical-align: top
}
.vtabs .tabs-vertical li .nav-link {
    color: #263238;
    margin-bottom: 10px;
    border: 0px;
    border-radius: 4px 0 0 4px
}
.vtabs .tab-content {
    display: table-cell;
    padding: 20px;
    vertical-align: top
}
.tabs-vertical li .nav-link.active,
.tabs-vertical li .nav-link.active:focus,
.tabs-vertical li .nav-link:hover {
    background: #1976d2;
    border: 0px;
    color: #ffffff
}
.customvtab .tabs-vertical li .nav-link.active,
.customvtab .tabs-vertical li .nav-link:focus,
.customvtab .tabs-vertical li .nav-link:hover {
    background: #ffffff;
    border: 0px;
    border-right: 2px solid #1976d2;
    margin-right: -1px;
    color: #1976d2
}
.tabcontent-border {
    border: 1px solid #ddd;
    border-top: 0px
}
.customtab2 li a.nav-link {
    border: 0px;
    margin-right: 3px;
    color: #67757c
}
.customtab2 li a.nav-link.active {
    background: #1976d2;
    color: #ffffff
}
.customtab2 li a.nav-link:hover {
    color: #ffffff;
    background: #1976d2
}
.progress-bar.active,
.progress.active .progress-bar {
    -webkit-animation: progress-bar-stripes 2s linear infinite;
    -o-animation: progress-bar-stripes 2s linear infinite;
    animation: progress-bar-stripes 2s linear infinite
}
.progress-vertical {
    min-height: 250px;
    height: 250px;
    position: relative;
    display: inline-block;
    margin-bottom: 0;
    margin-right: 20px
}
.progress-vertical-bottom {
    min-height: 250px;
    height: 250px;
    position: relative;
    display: inline-block;
    margin-bottom: 0;
    margin-right: 20px;
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg)
}
.progress-animated {
    -webkit-animation-duration: 5s;
    -webkit-animation-name: myanimation;
    -webkit-transition: 5s all;
    animation-duration: 5s;
    animation-name: myanimation;
    -o-transition: 5s all;
    transition: 5s all
}
@-webkit-keyframes myanimation {
    0% {
        width: 0
    }
}
@keyframes myanimation {
    0% {
        width: 0
    }
}
.jq-icon-info {
    background-color: #1976d2;
    color: #ffffff
}
.jq-icon-success {
    background-color: #26dad2;
    color: #ffffff
}
.jq-icon-error {
    background-color: #ef5350;
    color: #ffffff
}
.jq-icon-warning {
    background-color: #ffb22b;
    color: #ffffff
}
.alert-rounded {
    border-radius: 60px
}
.list-group a.list-group-item:hover {
    background: #f2f4f8
}
.list-group-item.active,
.list-group .list-group-item.active:hover {
    background: #1976d2;
    border-color: #1976d2
}
.list-group-item.disabled {
    color: #99abb4;
    background: #f2f4f8
}
.media {
    border: 1px solid rgba(120, 130, 140, 0.13);
    margin-bottom: 10px;
    padding: 15px
}
.el-element-overlay .white-box {
    padding: 0px
}
.el-element-overlay .el-card-item {
    position: relative;
    padding-bottom: 25px
}
.el-element-overlay .el-card-item .el-card-avatar {
    margin-bottom: 15px
}
.el-element-overlay .el-card-item .el-card-content {
    text-align: center
}
.el-element-overlay .el-card-item .el-card-content h3 {
    margin: 0px
}
.el-element-overlay .el-card-item .el-card-content a {
    color: #67757c
}
.el-element-overlay .el-card-item .el-card-content a:hover {
    color: #1976d2
}
.el-element-overlay .el-card-item .el-overlay-1 {
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default
}
.el-element-overlay .el-card-item .el-overlay-1 img {
    display: block;
    position: relative;
    -webkit-transition: all .4s linear;
    -o-transition: all .4s linear;
    transition: all .4s linear;
    width: 100%;
    height: auto
}
.el-element-overlay .el-card-item .el-overlay-1:hover img {
    -ms-transform: scale(1.2) translateZ(0);
    -webkit-transform: scale(1.2) translateZ(0)
}
.el-element-overlay .el-card-item .el-overlay-1 .el-info {
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    color: #ffffff;
    background-color: transparent;
    filter: alpha(opacity=0);
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    padding: 0;
    margin: auto;
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%) translateZ(0);
    -webkit-transform: translateY(-50%) translateZ(0);
    -ms-transform: translateY(-50%) translateZ(0)
}
.el-element-overlay .el-card-item .el-overlay-1 .el-info>li {
    list-style: none;
    display: inline-block;
    margin: 0 3px
}
.el-element-overlay .el-card-item .el-overlay-1 .el-info>li a {
    border-color: #ffffff;
    color: #ffffff;
    padding: 12px 15px 10px
}
.el-element-overlay .el-card-item .el-overlay-1 .el-info>li a:hover {
    background: #1976d2;
    border-color: #1976d2
}
.el-element-overlay .el-card-item .el-overlay {
    width: 100%;
    height: 100%;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
    opacity: 0;
    background-color: rgba(0, 0, 0, 0.7);
    -webkit-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out
}
.el-element-overlay .el-card-item .el-overlay-1:hover .el-overlay {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0)
}
.el-element-overlay .el-card-item .el-overlay-1 .scrl-dwn {
    top: -100%
}
.el-element-overlay .el-card-item .el-overlay-1 .scrl-up {
    top: 100%;
    height: 0px
}
.el-element-overlay .el-card-item .el-overlay-1:hover .scrl-dwn {
    top: 0px
}
.el-element-overlay .el-card-item .el-overlay-1:hover .scrl-up {
    top: 0px;
    height: 100%
}
.timeline {
    position: relative;
    padding: 20px 0 20px;
    list-style: none;
    max-width: 1200px;
    margin: 0 auto
}
.timeline:before {
    content: " ";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 3px;
    margin-left: -1.5px;
    background-color: #f2f4f8
}
.timeline>li {
    position: relative;
    margin-bottom: 20px
}
.timeline>li:after,
.timeline>li:before {
    content: " ";
    display: table
}
.timeline>li:after {
    clear: both
}
.timeline>li:after,
.timeline>li:before {
    content: " ";
    display: table
}
.timeline>li:after {
    clear: both
}
.timeline>li>.timeline-panel {
    float: left;
    position: relative;
    width: 46%;
    padding: 20px;
    border: 1px solid rgba(120, 130, 140, 0.13);
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.05)
}
.timeline>li>.timeline-panel:before {
    content: " ";
    display: inline-block;
    position: absolute;
    top: 26px;
    right: -8px;
    border-top: 8px solid transparent;
    border-right: 0 solid rgba(120, 130, 140, 0.13);
    border-bottom: 8px solid transparent;
    border-left: 8px solid rgba(120, 130, 140, 0.13)
}
.timeline>li>.timeline-panel:after {
    content: " ";
    display: inline-block;
    position: absolute;
    top: 27px;
    right: -7px;
    border-top: 7px solid transparent;
    border-right: 0 solid #ffffff;
    border-bottom: 7px solid transparent;
    border-left: 7px solid #ffffff
}
.timeline>li>.timeline-badge {
    z-index: 10;
    position: absolute;
    top: 16px;
    left: 50%;
    width: 50px;
    height: 50px;
    margin-left: -25px;
    border-radius: 50% 50% 50% 50%;
    text-align: center;
    font-size: 1.4em;
    line-height: 50px;
    color: #fff;
    overflow: hidden
}
.timeline>li.timeline-inverted>.timeline-panel {
    float: right
}
.timeline>li.timeline-inverted>.timeline-panel:before {
    right: auto;
    left: -8px;
    border-right-width: 8px;
    border-left-width: 0
}
.timeline>li.timeline-inverted>.timeline-panel:after {
    right: auto;
    left: -7px;
    border-right-width: 7px;
    border-left-width: 0
}
.timeline-badge.primary {
    background-color: #5c4ac7
}
.timeline-badge.success {
    background-color: #26dad2
}
.timeline-badge.warning {
    background-color: #ffb22b
}
.timeline-badge.danger {
    background-color: #ef5350
}
.timeline-badge.info {
    background-color: #1976d2
}
.timeline-title {
    margin-top: 0;
    color: inherit;
    font-weight: 400
}
.timeline-body>p,
.timeline-body>ul {
    margin-bottom: 0
}
.timeline-body>p+p {
    margin-top: 5px
}
.cd-horizontal-timeline .events a {
    padding-bottom: 6px;
    color: #1976d2
}
.cd-horizontal-timeline .events a.selected:after,
.cd-horizontal-timeline .filling-line {
    background: #1976d2
}
.cd-horizontal-timeline .events a.selected:after {
    border-color: #1976d2
}
.myadmin-dd .dd-list .dd-item .dd-handle {
    background: #ffffff;
    border: 1px solid rgba(120, 130, 140, 0.13);
    padding: 8px 16px;
    height: auto;
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    border-radius: 0
}
.myadmin-dd-empty .dd-list .dd3-content {
    height: auto;
    border: 1px solid rgba(120, 130, 140, 0.13);
    padding: 8px 16px 8px 46px;
    background: #ffffff;
    font-weight: 400
}
.myadmin-dd-empty .dd-list .dd3-handle {
    border: 1px solid rgba(120, 130, 140, 0.13);
    border-bottom: 0;
    background: #ffffff;
    height: 36px;
    width: 36px
}
.dd3-handle:before {
    color: #67757c;
    top: 7px
}
.ribbon-wrapper,
.ribbon-wrapper-bottom,
.ribbon-wrapper-reverse,
.ribbon-wrapper-right-bottom {
    position: relative;
    padding: 50px 15px 15px 15px
}
.ribbon-vwrapper {
    padding: 15px 15px 15px 50px;
    position: relative
}
.ribbon-overflow {
    overflow: hidden
}
.ribbon-vwrapper-reverse {
    padding: 15px 50px 15px 15px
}
.ribbon-wrapper-bottom {
    padding: 15px 15px 50px 50px
}
.ribbon-wrapper-right-bottom {
    padding: 15px 50px 50px 15px
}
.ribbon-content {
    margin-bottom: 0px
}
.ribbon {
    padding: 0 20px;
    height: 30px;
    line-height: 30px;
    clear: left;
    position: absolute;
    top: 12px;
    left: -2px;
    color: #ffffff
}
.ribbon-bookmark:before {
    position: absolute;
    top: 0;
    left: 100%;
    display: block;
    width: 0;
    height: 0;
    content: '';
    border: 15px solid #263238;
    border-right: 10px solid transparent
}
.ribbon-right {
    left: auto;
    right: -2px
}
.ribbon-bookmark.ribbon-right:before {
    right: 100%;
    left: auto;
    border-right: 15px solid #263238;
    border-left: 10px solid transparent
}
.ribbon-vertical-l,
.ribbon-vertical-r {
    clear: none;
    padding: 0 5px;
    height: 70px;
    width: 30px;
    line-height: 70px;
    text-align: center;
    left: 12px;
    top: -2px
}
.ribbon-vertical-r {
    left: auto;
    right: 12px
}
.ribbon-bookmark.ribbon-vertical-l:before,
.ribbon-bookmark.ribbon-vertical-r:before {
    top: 100%;
    left: 0;
    margin-top: -14px;
    border-right: 15px solid #263238;
    border-bottom: 10px solid transparent
}
.ribbon-badge {
    top: 15px;
    overflow: hidden;
    left: -90px;
    width: 100%;
    text-align: center;
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg)
}
.ribbon-badge.ribbon-right {
    left: auto;
    right: -90px;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg)
}
.ribbon-badge.ribbon-bottom {
    top: auto;
    bottom: 15px;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg)
}
.ribbon-badge.ribbon-right.ribbon-bottom {
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg)
}
.ribbon-corner {
    top: 0;
    left: 0;
    background-color: transparent!important;
    padding: 6px 0 0 10px
}
.ribbon-corner i {
    position: relative
}
.ribbon-corner:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 0;
    content: '';
    border: 30px solid transparent;
    border-top-color: #1976d2;
    border-left-color: #1976d2
}
.ribbon-corner.ribbon-right:before {
    right: 0;
    left: auto;
    border-right-color: #526069;
    border-left-color: transparent
}
.ribbon-corner.ribbon-right {
    right: 0;
    left: auto;
    padding: 6px 10px 0 0
}
.ribbon-corner.ribbon-bottom:before {
    top: auto;
    bottom: 0;
    border-top-color: transparent;
    border-bottom-color: #526069
}
.ribbon-corner.ribbon-bottom {
    bottom: 0;
    top: auto;
    padding: 0 10px 6px 10px
}
.ribbon-custom {
    background: #1976d2
}
.ribbon-bookmark.ribbon-right.ribbon-custom:before {
    border-right-color: #1976d2;
    border-left-color: transparent
}
.ribbon-bookmark.ribbon-vertical-l.ribbon-custom:before,
.ribbon-bookmark.ribbon-vertical-r.ribbon-custom:before {
    border-right-color: #1976d2;
    border-bottom-color: transparent
}
.ribbon-primary {
    background: #5c4ac7
}
.ribbon-bookmark.ribbon-primary:before {
    border-color: #5c4ac7;
    border-right-color: transparent
}
.ribbon-bookmark.ribbon-right.ribbon-primary:before {
    border-right-color: #5c4ac7;
    border-left-color: transparent
}
.ribbon-bookmark.ribbon-vertical-l.ribbon-primary:before,
.ribbon-bookmark.ribbon-vertical-r.ribbon-primary:before {
    border-right-color: #5c4ac7;
    border-bottom-color: transparent
}
.ribbon-primary.ribbon-corner:before {
    border-top-color: #5c4ac7;
    border-left-color: #5c4ac7
}
.ribbon-primary.ribbon-corner.ribbon-right:before {
    border-right-color: #5c4ac7;
    border-left-color: transparent
}
.ribbon-primary.ribbon-corner.ribbon-bottom:before {
    border-top-color: transparent;
    border-bottom-color: #5c4ac7
}
.ribbon-success {
    background: #26dad2
}
.ribbon-bookmark.ribbon-success:before {
    border-color: #26dad2;
    border-right-color: transparent
}
.ribbon-bookmark.ribbon-right.ribbon-success:before {
    border-right-color: #26dad2;
    border-left-color: transparent
}
.ribbon-bookmark.ribbon-vertical-l.ribbon-success:before,
.ribbon-bookmark.ribbon-vertical-r.ribbon-success:before {
    border-right-color: #26dad2;
    border-bottom-color: transparent
}
.ribbon-success.ribbon-corner:before {
    border-top-color: #26dad2;
    border-left-color: #26dad2
}
.ribbon-success.ribbon-corner.ribbon-right:before {
    border-right-color: #26dad2;
    border-left-color: transparent
}
.ribbon-success.ribbon-corner.ribbon-bottom:before {
    border-top-color: transparent;
    border-bottom-color: #26dad2
}
.ribbon-info {
    background: #1976d2
}
.ribbon-bookmark.ribbon-info:before {
    border-color: #1976d2;
    border-right-color: transparent
}
.ribbon-bookmark.ribbon-right.ribbon-info:before {
    border-right-color: #1976d2;
    border-left-color: transparent
}
.ribbon-bookmark.ribbon-vertical-l.ribbon-info:before,
.ribbon-bookmark.ribbon-vertical-r.ribbon-info:before {
    border-right-color: #1976d2;
    border-bottom-color: transparent
}
.ribbon-info.ribbon-corner:before {
    border-top-color: #1976d2;
    border-left-color: #1976d2
}
.ribbon-info.ribbon-corner.ribbon-right:before {
    border-right-color: #1976d2;
    border-left-color: transparent
}
.ribbon-info.ribbon-corner.ribbon-bottom:before {
    border-top-color: transparent;
    border-bottom-color: #1976d2
}
.ribbon-warning {
    background: #ffb22b
}
.ribbon-bookmark.ribbon-warning:before {
    border-color: #ffb22b;
    border-right-color: transparent
}
.ribbon-bookmark.ribbon-right.ribbon-warning:before {
    border-right-color: #ffb22b;
    border-left-color: transparent
}
.ribbon-bookmark.ribbon-vertical-l.ribbon-warning:before,
.ribbon-bookmark.ribbon-vertical-r.ribbon-warning:before {
    border-right-color: #ffb22b;
    border-bottom-color: transparent
}
.ribbon-warning.ribbon-corner:before {
    border-top-color: #ffb22b;
    border-left-color: #ffb22b
}
.ribbon-warning.ribbon-corner.ribbon-right:before {
    border-right-color: #ffb22b;
    border-left-color: transparent
}
.ribbon-warning.ribbon-corner.ribbon-bottom:before {
    border-top-color: transparent;
    border-bottom-color: #ffb22b
}
.ribbon-danger {
    background: #ef5350
}
.ribbon-bookmark.ribbon-danger:before {
    border-color: #ef5350;
    border-right-color: transparent
}
.ribbon-bookmark.ribbon-right.ribbon-danger:before {
    border-right-color: #ef5350;
    border-left-color: transparent
}
.ribbon-bookmark.ribbon-vertical-l.ribbon-danger:before,
.ribbon-bookmark.ribbon-vertical-r.ribbon-danger:before {
    border-right-color: #ef5350;
    border-bottom-color: transparent
}
.ribbon-danger.ribbon-corner:before {
    border-top-color: #ef5350;
    border-left-color: #ef5350
}
.ribbon-danger.ribbon-corner.ribbon-right:before {
    border-right-color: #ef5350;
    border-left-color: transparent
}
.ribbon-danger.ribbon-corner.ribbon-bottom:before {
    border-top-color: transparent;
    border-bottom-color: #ef5350
}
.ribbon-default {
    background: #263238
}
.ribbon-bookmark.ribbon-default:before {
    border-color: #263238;
    border-right-color: transparent
}
.ribbon-bookmark.ribbon-right.ribbon-default:before {
    border-right-color: #263238;
    border-left-color: transparent
}
.ribbon-bookmark.ribbon-vertical-l.ribbon-default:before,
.ribbon-bookmark.ribbon-vertical-r.ribbon-default:before {
    border-right-color: #263238;
    border-bottom-color: transparent
}
.ribbon-default.ribbon-corner:before {
    border-top-color: #263238;
    border-left-color: #263238
}
.ribbon-default.ribbon-corner.ribbon-right:before {
    border-right-color: #263238;
    border-left-color: transparent
}
.ribbon-default.ribbon-corner.ribbon-bottom:before {
    border-top-color: transparent;
    border-bottom-color: #263238
}
#idletimeout {
    background: #1976d2;
    border: 3px solid #1976d2;
    color: #fff;
    font-family: arial, sans-serif;
    text-align: center;
    font-size: 12px;
    padding: 10px;
    position: relative;
    top: 0px;
    left: 0;
    right: 0;
    z-index: 100000;
    display: none
}
#idletimeout a {
    color: #ffffff;
    font-weight: bold
}
#idletimeout span {
    font-weight: bold
}
.mytooltip:hover .tooltip-content2,
.mytooltip:hover .tooltip-content2 i {
    opacity: 1;
    font-size: 18px;
    pointer-events: auto;
    -webkit-transform: translate3d(0, 0, 0) scale3d(1, 1, 1);
    transform: translate3d(0, 0, 0) scale3d(1, 1, 1)
}
.mytooltip:hover .tooltip-content4,
.mytooltip:hover .tooltip-text2 {
    pointer-events: auto;
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}
.mytooltip {
    display: inline;
    position: relative;
    z-index: 9999
}
.mytooltip:hover .tooltip-item:after {
    pointer-events: auto
}
.mytooltip:hover .tooltip-content {
    pointer-events: auto;
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0) rotate3d(0, 0, 0, 0);
    transform: translate3d(0, 0, 0) rotate3d(0, 0, 0, 0)
}
.mytooltip:hover .tooltip-content3 {
    opacity: 1;
    pointer-events: auto;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
}
.mytooltip:hover .tooltip-item2 {
    color: #ffffff;
    -webkit-transform: translate3d(0, -0.5em, 0);
    transform: translate3d(0, -0.5em, 0)
}
.mytooltip:hover .tooltip-content5 {
    opacity: 1;
    pointer-events: auto;
    -webkit-transition-delay: 0s;
    -o-transition-delay: 0s;
    transition-delay: 0s
}
.mytooltip:hover .tooltip-text3 {
    -webkit-transition-delay: 0s;
    -o-transition-delay: 0s;
    transition-delay: 0s;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
}
.mytooltip:hover .tooltip-inner2 {
    -webkit-transition-delay: 0.3s;
    -o-transition-delay: 0.3s;
    transition-delay: 0.3s;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}
.tooltip-item {
    background: rgba(0, 0, 0, 0.1);
    cursor: pointer;
    display: inline-block;
    font-weight: 500;
    padding: 0 10px
}
.tooltip-item:after {
    content: '';
    position: absolute;
    width: 360px;
    height: 20px;
    bottom: 100%;
    left: 50%;
    pointer-events: none;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%)
}
.tooltip-content {
    position: absolute;
    z-index: 9999;
    width: 360px;
    left: 50%;
    margin: 0 0 20px -180px;
    bottom: 100%;
    text-align: left;
    font-size: 14px;
    line-height: 30px;
    -webkit-box-shadow: -5px -5px 15px rgba(48, 54, 61, 0.2);
    box-shadow: -5px -5px 15px rgba(48, 54, 61, 0.2);
    background: #2b2b2b;
    opacity: 0;
    cursor: default;
    pointer-events: none
}
.tooltip-content img {
    position: relative;
    height: 140px;
    display: block;
    float: left;
    margin-right: 1em
}
.tooltip-effect-5 .tooltip-content {
    width: 180px;
    margin-left: -90px;
    -webkit-transform-origin: 50% calc(106%);
    -ms-transform-origin: 50% calc(106%);
    transform-origin: 50% calc(106%);
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg);
    -webkit-transition: opacity 0.2s, -webkit-transform 0.2s;
    transition: opacity 0.2s, -webkit-transform 0.2s;
    -o-transition: opacity 0.2s, transform 0.2s;
    transition: opacity 0.2s, transform 0.2s;
    transition: opacity 0.2s, transform 0.2s, -webkit-transform 0.2s;
    -webkit-transition-timing-function: ease, cubic-bezier(0.17, 0.67, 0.4, 1.39);
    -o-transition-timing-function: ease, cubic-bezier(0.17, 0.67, 0.4, 1.39);
    transition-timing-function: ease, cubic-bezier(0.17, 0.67, 0.4, 1.39)
}
.tooltip-effect-5 .tooltip-text {
    padding: 1.4em
}
.tooltip-content:after {
    content: '';
    top: 100%;
    left: 50%;
    border: solid transparent;
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: transparent;
    border-top-color: #2a3035;
    border-width: 10px;
    margin-left: -10px
}
.tooltip-text {
    font-size: 14px;
    line-height: 24px;
    display: block;
    padding: 1.31em 1.21em 1.21em 0;
    color: #ffffff
}
.tooltip-content2 {
    position: absolute;
    z-index: 9999;
    width: 80px;
    height: 80px;
    padding-top: 25px;
    left: 50%;
    margin-left: -40px;
    bottom: 100%;
    border-radius: 50%;
    text-align: center;
    background: #1976d2;
    color: #ffffff;
    opacity: 0;
    margin-bottom: 20px;
    cursor: default;
    pointer-events: none
}
.tooltip-content2 i {
    opacity: 0
}
.tooltip-effect-6 .tooltip-content2 {
    -webkit-transform: translate3d(0, 10px, 0) rotate3d(1, 1, 1, 45deg);
    transform: translate3d(0, 10px, 0) rotate3d(1, 1, 1, 45deg);
    -webkit-transform-origin: 50% 100%;
    -ms-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    -o-transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s
}
.tooltip-effect-6 .tooltip-content2 i {
    -webkit-transform: scale3d(0, 0, 1);
    transform: scale3d(0, 0, 1);
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    -o-transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s
}
.tooltip-effect-6:hover .tooltip-content2 i {
    -webkit-transform: rotate3d(1, 1, 1, 0);
    transform: rotate3d(1, 1, 1, 0)
}
.tooltip-content2:after {
    content: '';
    position: absolute;
    top: 100%;
    left: 50%;
    margin: -7px 0 0 -15px;
    width: 30px;
    height: 20px;
    background: url("../../assets/images/tooltip/tooltip1.svg") no-repeat center center;
    background-size: 100%
}
.tooltip-content3 {
    position: absolute;
    background: url("../../assets/images/tooltip/shape1.svg") no-repeat center bottom;
    background-size: 100% 100%;
    z-index: 9999;
    width: 200px;
    bottom: 100%;
    left: 50%;
    margin-left: -100px;
    padding: 50px 30px;
    text-align: center;
    color: #ffffff;
    opacity: 0;
    cursor: default;
    font-size: 14;
    line-height: 27px;
    pointer-events: none;
    -webkit-transform: scale3d(0.1, 0.2, 1);
    transform: scale3d(0.1, 0.2, 1);
    -webkit-transform-origin: 50% 120%;
    -ms-transform-origin: 50% 120%;
    transform-origin: 50% 120%;
    -webkit-transition: opacity 0.4s, -webkit-transform 0.4s;
    transition: opacity 0.4s, -webkit-transform 0.4s;
    -o-transition: opacity 0.4s, transform 0.4s;
    transition: opacity 0.4s, transform 0.4s;
    transition: opacity 0.4s, transform 0.4s, -webkit-transform 0.4s;
    -webkit-transition-timing-function: ease, cubic-bezier(0.6, 0, 0.4, 1);
    -o-transition-timing-function: ease, cubic-bezier(0.6, 0, 0.4, 1);
    transition-timing-function: ease, cubic-bezier(0.6, 0, 0.4, 1)
}
.tooltip-content3:after {
    content: '';
    position: absolute;
    width: 16px;
    height: 16px;
    left: 50%;
    margin-left: -8px;
    top: 100%;
    background: #00aeef;
    -webkit-transform: translate3d(0, -60%, 0) rotate3d(0, 0, 1, 45deg);
    transform: translate3d(0, -60%, 0) rotate3d(0, 0, 1, 45deg)
}
.tooltip-item2 {
    color: #00aeef;
    cursor: pointer;
    z-index: 100;
    position: relative;
    display: inline-block;
    font-weight: 500;
    -webkit-transition: background-color 0.3s, color 0.3s, -webkit-transform 0.3s;
    transition: background-color 0.3s, color 0.3s, -webkit-transform 0.3s;
    -o-transition: background-color 0.3s, color 0.3s, transform 0.3s;
    transition: background-color 0.3s, color 0.3s, transform 0.3s;
    transition: background-color 0.3s, color 0.3s, transform 0.3s, -webkit-transform 0.3s
}
.tooltip-content4 {
    position: absolute;
    z-index: 99;
    width: 360px;
    left: 50%;
    margin-left: -180px;
    bottom: -5px;
    text-align: left;
    background: #00aeef;
    opacity: 0;
    font-size: 14px;
    line-height: 27px;
    padding: 1.5em;
    color: #ffffff;
    border-bottom: 55px solid #2b2b2b;
    cursor: default;
    pointer-events: none;
    border-radius: 5px;
    -webkit-transform: translate3d(0, -0.5em, 0);
    transform: translate3d(0, -0.5em, 0);
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    -o-transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s
}
.tooltip-content4 a {
    color: #2b2b2b
}
.tooltip-text2 {
    opacity: 0;
    -webkit-transform: translate3d(0, 1.5em, 0);
    transform: translate3d(0, 1.5em, 0);
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    -o-transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s
}
.tooltip-content5 {
    position: absolute;
    z-index: 9999;
    width: 300px;
    left: 50%;
    bottom: 100%;
    font-size: 20px;
    line-height: 1.4;
    text-align: center;
    font-weight: 400;
    color: #ffffff;
    background: transparent;
    opacity: 0;
    margin: 0 0 20px -150px;
    cursor: default;
    pointer-events: none;
    -webkit-transition: opacity 0.3s 0.3s;
    -o-transition: opacity 0.3s 0.3s;
    transition: opacity 0.3s 0.3s
}
.tooltip-content5 span {
    display: block
}
.tooltip-text3 {
    border-bottom: 10px solid #1976d2;
    overflow: hidden;
    -webkit-transform: scale3d(0, 1, 1);
    transform: scale3d(0, 1, 1);
    -webkit-transition: -webkit-transform 0.3s 0.3s;
    transition: -webkit-transform 0.3s 0.3s;
    -o-transition: transform 0.3s 0.3s;
    transition: transform 0.3s 0.3s;
    transition: transform 0.3s 0.3s, -webkit-transform 0.3s 0.3s
}
.tooltip-inner2 {
    background: #2b2b2b;
    padding: 40px;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    -webkit-transition: -webkit-transform 0.3s;
    transition: -webkit-transform 0.3s;
    -o-transition: transform 0.3s;
    transition: transform 0.3s;
    transition: transform 0.3s, -webkit-transform 0.3s
}
.tooltip-content5:after {
    content: '';
    bottom: -20px;
    left: 50%;
    border: solid transparent;
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: transparent;
    border-top-color: #1976d2;
    border-width: 10px;
    margin-left: -10px
}
.tooltip-effect-1 .tooltip-content {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0);
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    -o-transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s;
    color: #ffffff
}
.tooltip-effect-2 .tooltip-content {
    -webkit-transform-origin: 50% calc(110%);
    -ms-transform-origin: 50% calc(110%);
    transform-origin: 50% calc(110%);
    -webkit-transform: perspective(1000px) rotate3d(1, 0, 0, 45deg);
    transform: perspective(1000px) rotate3d(1, 0, 0, 45deg);
    -webkit-transition: opacity 0.2s, -webkit-transform 0.2s;
    transition: opacity 0.2s, -webkit-transform 0.2s;
    -o-transition: opacity 0.2s, transform 0.2s;
    transition: opacity 0.2s, transform 0.2s;
    transition: opacity 0.2s, transform 0.2s, -webkit-transform 0.2s
}
.tooltip-effect-3 .tooltip-content {
    -webkit-transform: translate3d(0, 10px, 0) rotate3d(1, 1, 0, 25deg);
    transform: translate3d(0, 10px, 0) rotate3d(1, 1, 0, 25deg);
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    -o-transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s
}
.tooltip-effect-4 .tooltip-content {
    -webkit-transform-origin: 50% 100%;
    -ms-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    -webkit-transform: scale3d(0.7, 0.3, 1);
    transform: scale3d(0.7, 0.3, 1);
    -webkit-transition: opacity 0.2s, -webkit-transform 0.2s;
    transition: opacity 0.2s, -webkit-transform 0.2s;
    -o-transition: opacity 0.2s, transform 0.2s;
    transition: opacity 0.2s, transform 0.2s;
    transition: opacity 0.2s, transform 0.2s, -webkit-transform 0.2s
}
.tooltip.tooltip-effect-2:hover .tooltip-content {
    -webkit-transform: perspective(1000px) rotate3d(1, 0, 0, 0deg);
    transform: perspective(1000px) rotate3d(1, 0, 0, 0deg)
}
a.mytooltip {
    font-weight: 500;
    color: #1976d2
}
.tooltip-effect-7 .tooltip-content2 {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0);
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    -o-transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s
}
.tooltip-effect-7 .tooltip-content2 i {
    -webkit-transform: translate3d(0, 15px, 0);
    transform: translate3d(0, 15px, 0);
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    -o-transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s
}
.tooltip-effect-8 .tooltip-content2 {
    -webkit-transform: translate3d(0, 10px, 0) rotate3d(0, 1, 0, 90deg);
    transform: translate3d(0, 10px, 0) rotate3d(0, 1, 0, 90deg);
    -webkit-transform-origin: 50% 100%;
    -ms-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    -o-transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s
}
.tooltip-effect-8 .tooltip-content2 i {
    -webkit-transform: scale3d(0, 0, 1);
    transform: scale3d(0, 0, 1);
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    -o-transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s
}
.tooltip-effect-9 .tooltip-content2 {
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0);
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    -o-transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s
}
.tooltip-effect-9 .tooltip-content2 i {
    -webkit-transform: translate3d(0, 20px, 0);
    transform: translate3d(0, 20px, 0);
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    -o-transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s
}
.error-box {
    height: 100%;
    position: fixed;
    background: url("../../assets/images/background/error-bg.jpg") no-repeat center center #fff;
    width: 100%
}
.error-box .footer {
    width: 100%;
    left: 0px;
    right: 0px
}
.error-body {
    padding-top: 5%
}
.error-body h1 {
    font-size: 210px;
    font-weight: 900;
    line-height: 210px
}
.gmaps,
.gmaps-panaroma {
    height: 300px
}
.gmaps,
.gmaps-panaroma {
    height: 300px;
    background: #f2f4f8;
    border-radius: 3px
}
.gmaps-overlay {
    display: block;
    text-align: center;
    color: #ffffff;
    font-size: 16px;
    line-height: 40px;
    background: #5c4ac7;
    border-radius: 4px;
    padding: 10px 20px
}
.gmaps-overlay_arrow {
    left: 50%;
    margin-left: -16px;
    width: 0;
    height: 0;
    position: absolute
}
.gmaps-overlay_arrow.above {
    bottom: -15px;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    border-top: 16px solid #5c4ac7
}
.gmaps-overlay_arrow.below {
    top: -15px;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    border-bottom: 16px solid #5c4ac7
}
.jvectormap-zoomin,
.jvectormap-zoomout {
    width: 10px;
    height: 10px;
    line-height: 10px
}
.jvectormap-zoomout {
    top: 40px
}
.search-listing {
    padding: 0px;
    margin: 0px
}
.search-listing li {
    list-style: none;
    padding: 15px 0;
    border-bottom: 1px solid rgba(120, 130, 140, 0.13)
}
.search-listing li h3 {
    margin: 0px;
    font-size: 18px
}
.search-listing li h3 a {
    color: #1976d2
}
.search-listing li h3 a:hover {
    text-decoration: underline
}
.search-listing li a {
    color: #26dad2
}
.login-register {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    height: 100%;
    width: 100%;
    padding: 5% 0;
    position: fixed
}
.login-box {
    width: 400px;
    margin: 0 auto
}
.login-box .footer {
    width: 100%;
    left: 0px;
    right: 0px
}
.login-box .social {
    display: block;
    margin-bottom: 30px
}
#recoverform {
    display: none
}
.login-sidebar {
    padding: 0px;
    margin-top: 0px
}
.login-sidebar .login-box {
    right: 0px;
    position: absolute;
    height: 100%
}
.minimal-faq .card {
    border: 0px
}
.minimal-faq .card .card-header {
    background: #ffffff;
    padding: 20px 0;
    margin-top: 10px
}
.minimal-faq .card .card-body {
    padding: 15px 0px
}
.pricing-box {
    position: relative;
    text-align: center;
    margin-top: 30px
}
.featured-plan {
    margin-top: 0px
}
.featured-plan .pricing-body {
    padding: 60px 0;
    background: #ebf3f5;
    border: 1px solid #ddd
}
.featured-plan .price-table-content .price-row {
    border-top: 1px solid rgba(120, 130, 140, 0.13)
}
.pricing-body {
    border-radius: 0px;
    border-top: 1px solid rgba(120, 130, 140, 0.13);
    border-bottom: 5px solid rgba(120, 130, 140, 0.13);
    vertical-align: middle;
    padding: 30px 0;
    position: relative
}
.pricing-body h2 {
    position: relative;
    font-size: 56px;
    margin: 20px 0 10px;
    font-weight: 500
}
.pricing-body h2 span {
    position: absolute;
    font-size: 15px;
    top: -10px;
    margin-left: -10px
}
.price-table-content .price-row {
    padding: 20px 0;
    border-top: 1px solid rgba(120, 130, 140, 0.13)
}
.pricing-plan {
    padding: 0 15px
}
.pricing-plan .no-padding {
    padding: 0px
}
.price-lable {
    position: absolute;
    top: -10px;
    padding: 5px 10px;
    margin: 0 auto;
    display: inline-block;
    width: 100px;
    left: 0px;
    right: 0px
}
.chat-main-box {
    position: relative;
    overflow: hidden
}
.chat-main-box .chat-left-aside {
    position: relative;
    width: 250px;
    float: left;
    z-index: 9;
    top: 0px;
    border-right: 1px solid rgba(120, 130, 140, 0.13)
}
.chat-main-box .chat-left-aside .open-panel {
    display: none;
    cursor: pointer;
    position: absolute;
    left: -webkit-calc(100% - 1px);
    top: 50%;
    z-index: 100;
    background-color: #fff;
    -webkit-box-shadow: 1px 0 3px rgba(0, 0, 0, 0.2);
    box-shadow: 1px 0 3px rgba(0, 0, 0, 0.2);
    border-radius: 0 100px 100px 0;
    line-height: 1;
    padding: 15px 8px 15px 4px
}
.chat-main-box .chat-left-aside .chat-left-inner {
    position: relative
}
.chat-main-box .chat-left-aside .chat-left-inner .form-control {
    height: 60px;
    padding: 15px;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#1976d2), to(#1976d2)), -webkit-gradient(linear, left top, left bottom, from(rgba(120, 130, 140, 0.13)), to(rgba(120, 130, 140, 0.13)));
    background-image: -webkit-linear-gradient(#1976d2, #1976d2), -webkit-linear-gradient(rgba(120, 130, 140, 0.13), rgba(120, 130, 140, 0.13));
    background-image: -o-linear-gradient(#1976d2, #1976d2), -o-linear-gradient(rgba(120, 130, 140, 0.13), rgba(120, 130, 140, 0.13));
    background-image: linear-gradient(#1976d2, #1976d2), linear-gradient(rgba(120, 130, 140, 0.13), rgba(120, 130, 140, 0.13))
}
.chat-main-box .chat-left-aside .chat-left-inner .style-none {
    padding: 0px
}
.chat-main-box .chat-left-aside .chat-left-inner .style-none li {
    list-style: none;
    overflow: hidden
}
.chat-main-box .chat-left-aside .chat-left-inner .style-none li a {
    padding: 20px
}
.chat-main-box .chat-left-aside .chat-left-inner .style-none li a.active,
.chat-main-box .chat-left-aside .chat-left-inner .style-none li a:hover {
    background: #ebf3f5
}
.chat-main-box .chat-right-aside {
    width: calc(100% - 250px);
    float: left
}
.chat-main-box .chat-right-aside .chat-list {
    max-height: none;
    height: 100%;
    padding-top: 40px
}
.chat-main-box .chat-right-aside .chat-list .chat-text {
    border-radius: 6px
}
.chat-main-box .chat-right-aside .send-chat-box {
    position: relative
}
.chat-main-box .chat-right-aside .send-chat-box .form-control {
    border: none;
    border-top: 1px solid rgba(120, 130, 140, 0.13);
    resize: none;
    height: 80px;
    padding-right: 180px
}
.chat-main-box .chat-right-aside .send-chat-box .form-control:focus {
    border-color: rgba(120, 130, 140, 0.13)
}
.chat-main-box .chat-right-aside .send-chat-box .custom-send {
    position: absolute;
    right: 20px;
    bottom: 10px
}
.chat-main-box .chat-right-aside .send-chat-box .custom-send .cst-icon {
    color: #67757c;
    margin-right: 10px
}
.inbox-panel .list-group .list-group-item {
    border: 0px;
    border-radius: 0px;
    border-left: 3px solid transparent
}
.inbox-panel .list-group .list-group-item a {
    color: #67757c
}
.inbox-panel .list-group .list-group-item.active,
.inbox-panel .list-group .list-group-item:hover {
    background: #f2f4f8;
    border-left: 3px solid #1976d2
}
.inbox-center .unread td {
    font-weight: 400
}
.inbox-center td {
    vertical-align: middle;
    white-space: nowrap
}
.inbox-center a {
    color: #67757c;
    padding: 2px 0 3px 0;
    overflow: hidden;
    vertical-align: middle;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    white-space: nowrap;
    display: inline-block
}
.inbox-center .checkbox {
    margin-top: -13px;
    height: 20px
}
.calendar-events {
    padding: 8px 10px;
    border: 1px solid #ffffff;
    cursor: move
}
.calendar-events:hover {
    border: 1px dashed rgba(120, 130, 140, 0.13)
}
.calendar-events i {
    margin-right: 8px
}
.contact-page-aside {
    position: relative
}
.left-aside {
    position: absolute;
    border-right: 1px solid rgba(120, 130, 140, 0.13);
    padding: 20px;
    width: 250px;
    height: 100%
}
.right-aside {
    padding: 20px;
    margin-left: 250px
}
.contact-list td {
    vertical-align: middle;
    padding: 25px 10px
}
.contact-list td img {
    width: 30px
}
.list-style-none {
    margin: 0px;
    padding: 0px
}
.list-style-none li {
    list-style: none;
    margin: 0px
}
.list-style-none li.box-label a {
    font-weight: 500
}
.list-style-none li.divider {
    margin: 10px 0;
    height: 1px;
    background: rgba(120, 130, 140, 0.13)
}
.list-style-none li a {
    padding: 15px 10px;
    display: block;
    color: #67757c
}
.list-style-none li a:hover {
    color: #1976d2
}
.list-style-none li a span {
    float: right
}
.slimScrollBar {
    z-index: 10!important
}
.carousel-item-next,
.carousel-item-prev,
.carousel-item.active {
    display: block
}
.plugin-details {
    display: none
}
.plugin-details-active {
    display: block
}
.earning-box h6 {
    font-weight: 500;
    margin-bottom: 0px;
    white-space: nowrap
}
.earning-box td,
.earning-box th {
    vertical-align: middle
}
.jsgrid-pager-current-page,
.jsgrid-pager-nav-button a,
.jsgrid-pager-page a {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    display: inline-block;
    min-width: 1.5em;
    padding: 0.5em 1em;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    color: #67757c;
    border: 1px solid #ddd
}
.jsgrid-pager-nav-button a:hover,
.jsgrid-pager-page a:hover {
    background-color: #1976d2;
    color: #ffffff
}
.jsgrid-pager-current-page {
    background-color: #1976d2;
    color: #ffffff
}
.jsgrid-pager-nav-button,
.jsgrid-pager-page {
    padding: 0
}
.jsgrid-pager-page.jsgrid-pager-current-page {
    padding: 0.5em 1em!important
}
.left-sidebar {
    position: absolute;
    width: 240px;
    height: 100%;
    top: 0px;
    z-index: 20;
    padding-top: 60px;
    background: #fff;
    -webkit-box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
    box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08)
}
.fix-sidebar .left-sidebar {
    position: fixed
}
.user-profile {
    position: relative;
    background-size: cover
}
.user-profile .setpos {
    top: -47px;
    right: -3px
}
.user-profile .profile-img {
    width: 70px;
    margin: 0 auto;
    padding: 10px 0 5px 0;
    border-radius: 100%
}
.user-profile .profile-img img {
    width: 100%;
    padding: 5px;
    border: 1px solid rgba(120, 130, 140, 0.13);
    border-radius: 100%
}
.user-profile .profile-text {
    padding: 5px 0px;
    position: relative;
    text-align: center
}
.user-profile .profile-text>a {
    color: #99abb4;
    padding: 0 5px
}
.user-profile .profile-text>a:hover {
    color: #1976d2
}
.user-profile .profile-text>a:after {
    display: none
}
.user-profile .dropdown-menu {
    left: 0px;
    right: 0px;
    top: 62px!important;
    width: 180px;
    margin: 0 auto
}
.sidebar-footer {
    position: fixed;
    z-index: 10;
    bottom: 0px;
    left: 0px;
    -webkit-transition: 0.2s ease-out;
    -o-transition: 0.2s ease-out;
    transition: 0.2s ease-out;
    width: 240px;
    background: #fff;
    border-top: 1px solid rgba(120, 130, 140, 0.13)
}
.sidebar-footer a {
    padding: 15px;
    width: 33.333337%;
    float: left;
    text-align: center;
    font-size: 18px
}
.scroll-sidebar {
    padding-bottom: 60px
}
.collapse.in {
    display: block
}
.sidebar-nav {
    background: #fff;
    padding: 0px
}
.sidebar-nav ul {
    margin: 0px;
    padding: 0px
}
.sidebar-nav ul li {
    list-style: none
}
.sidebar-nav ul li a {
    color: #607d8b;
    padding: 8px 35px 8px 15px;
    display: block;
    font-size: 14px;
    white-space: nowrap
}
.sidebar-nav ul li a.active,
.sidebar-nav ul li a:hover {
    color: #1976d2
}
.sidebar-nav ul li a.active i,
.sidebar-nav ul li a:hover i {
    color: #1976d2
}
.sidebar-nav ul li a.active {
    font-weight: 500;
    color: #263238
}
.sidebar-nav ul li ul {
    padding-left: 28px
}
.sidebar-nav ul li ul li a {
    padding: 7px 35px 7px 15px
}
.sidebar-nav ul li ul ul {
    padding-left: 15px
}
.sidebar-nav ul li.nav-small-cap {
    font-size: 12px;
    margin-bottom: 0px;
    padding: 14px 14px 14px 20px;
    color: #263238;
    font-weight: 500
}
.sidebar-nav ul li.nav-devider {
    height: 1px;
    background: rgba(120, 130, 140, 0.13);
    display: block;
    margin: 20px 0
}
.sidebar-nav>ul>li>a {
    border-left: 3px solid transparent
}
.sidebar-nav>ul>li>a i {
    width: 27px;
    font-size: 19px;
    display: inline-block;
    vertical-align: middle;
    color: #99abb4
}
.sidebar-nav>ul>li>a .label {
    float: right;
    margin-top: 6px
}
.sidebar-nav>ul>li>a.active {
    font-weight: 400;
    background: #ffffff;
    color: #26c6da
}
.sidebar-nav>ul>li {
    margin-bottom: 5px
}
.sidebar-nav>ul>li.active>a {
    color: #1976d2;
    font-weight: 500;
    border-left: 3px solid #1976d2
}
.sidebar-nav>ul>li.active>a i {
    color: #1976d2
}
.sidebar-nav .has-arrow {
    position: relative
}
.sidebar-nav .has-arrow:after {
    position: absolute;
    content: '';
    width: 7px;
    height: 7px;
    border-width: 1px 0 0 1px;
    border-style: solid;
    border-color: #607d8b;
    right: 1em;
    -webkit-transform: rotate(135deg) translate(0, -50%);
    -ms-transform: rotate(135deg) translate(0, -50%);
    -o-transform: rotate(135deg) translate(0, -50%);
    transform: rotate(135deg) translate(0, -50%);
    -webkit-transform-origin: top;
    -ms-transform-origin: top;
    -o-transform-origin: top;
    transform-origin: top;
    top: 47%;
    -webkit-transition: all .3s ease-out;
    -o-transition: all .3s ease-out;
    transition: all .3s ease-out
}
.sidebar-nav .active>.has-arrow:after,
.sidebar-nav .has-arrow[aria-expanded=true]:after,
.sidebar-nav li>.has-arrow.active:after {
    -webkit-transform: rotate(-135deg) translate(0, -50%);
    -ms-transform: rotate(-135deg) translate(0, -50%);
    -o-transform: rotate(-135deg) translate(0, -50%);
    top: 45%;
    width: 7px;
    transform: rotate(-135deg) translate(0, -50%)
}
@media (min-width: 768px) {
    .mini-sidebar .sidebar-nav #sidebarnav li {
        position: relative
    }
    .mini-sidebar .sidebar-nav #sidebarnav>li>ul {
        position: absolute;
        left: 60px;
        top: 45px;
        width: 200px;
        z-index: 1001;
        background: #f2f6f8;
        display: none;
        padding-left: 1px
    }
    .mini-sidebar .user-profile .profile-img {
        width: 50px
    }
    .mini-sidebar .user-profile .profile-img .setpos {
        top: -35px
    }
    .mini-sidebar.fix-sidebar .left-sidebar {
        position: absolute
    }
    .mini-sidebar .sidebar-nav #sidebarnav>li:hover>ul {
        height: auto!important;
        overflow: auto
    }
    .mini-sidebar .sidebar-nav #sidebarnav>li:hover>ul,
    .mini-sidebar .sidebar-nav #sidebarnav>li:hover>ul.collapse {
        display: block
    }
    .mini-sidebar .sidebar-nav #sidebarnav>li>a.has-arrow:after {
        display: none
    }
    .mini-sidebar .left-sidebar {
        width: 60px
    }
    .mini-sidebar .user-profile {
        padding-bottom: 15px;
        width: 60px;
        margin-bottom: 7px
    }
    .mini-sidebar .user-profile .profile-img {
        padding: 15px 0 0 0;
        margin: 0px 0 0 6px
    }
    .mini-sidebar .user-profile .profile-img:before {
        top: 15px
    }
    .mini-sidebar .scroll-sidebar {
        padding-bottom: 0px;
        position: absolute;
        overflow-x: hidden!important
    }
    .mini-sidebar .hide-menu,
    .mini-sidebar .nav-small-cap,
    .mini-sidebar .sidebar-footer,
    .mini-sidebar .user-profile .profile-text,
    .mini-sidebar>.label {
        display: none
    }
    .mini-sidebar .nav-devider {
        width: 60px
    }
    .mini-sidebar .sidebar-nav {
        background: transparent
    }
    .mini-sidebar .sidebar-nav #sidebarnav>li>a {
        padding: 9px 18px;
        width: 50px
    }
    .mini-sidebar .sidebar-nav #sidebarnav>li:hover>a {
        width: 260px;
        background: #f2f6f8
    }
    .mini-sidebar .sidebar-nav #sidebarnav>li:hover>a .hide-menu {
        display: inline
    }
    .mini-sidebar .sidebar-nav #sidebarnav>li:hover>a .label {
        display: none
    }
}
@media (max-width: 767px) {
    .mini-sidebar .left-sidebar {
        position: fixed
    }
    .mini-sidebar .left-sidebar,
    .mini-sidebar .sidebar-footer {
        left: -240px
    }
    .mini-sidebar.show-sidebar .left-sidebar,
    .mini-sidebar.show-sidebar .sidebar-footer {
        left: 0px
    }
}
.topbar .top-navbar .mailbox {
    width: 300px
}
.topbar .top-navbar .mailbox ul {
    padding: 0px
}
.topbar .top-navbar .mailbox ul li {
    list-style: none
}
.mailbox ul li .drop-title {
    font-weight: 500;
    padding: 11px 20px 15px;
    border-bottom: 1px solid rgba(120, 130, 140, 0.13)
}
.mailbox ul li .nav-link {
    border-top: 1px solid rgba(120, 130, 140, 0.13);
    padding-top: 15px
}
.mailbox .message-center {
    height: 200px;
    overflow: auto;
    position: relative
}
.mailbox .message-center a {
    border-bottom: 1px solid rgba(120, 130, 140, 0.13);
    display: block;
    text-decoration: none;
    padding: 9px 15px
}
.mailbox .message-center a:hover {
    background: #f2f4f8
}
.mailbox .message-center a div {
    white-space: normal
}
.mailbox .message-center a .user-img {
    width: 40px;
    position: relative;
    display: inline-block;
    margin: 0 10px 15px 0
}
.mailbox .message-center a .user-img img {
    width: 100%
}
.mailbox .message-center a .user-img .profile-status {
    border: 2px solid #ffffff;
    border-radius: 50%;
    display: inline-block;
    height: 10px;
    left: 30px;
    position: absolute;
    top: 1px;
    width: 10px
}
.mailbox .message-center a .user-img .online {
    background: #26dad2
}
.mailbox .message-center a .user-img .busy {
    background: #ef5350
}
.mailbox .message-center a .user-img .away {
    background: #ffb22b
}
.mailbox .message-center a .user-img .offline {
    background: #ffb22b
}
.mailbox .message-center a .mail-contnet {
    display: inline-block;
    width: 75%;
    vertical-align: middle
}
.mailbox .message-center a .mail-contnet h5 {
    margin: 5px 0px 0
}
.mailbox .message-center a .mail-contnet .mail-desc,
.mailbox .message-center a .mail-contnet .time {
    font-size: 12px;
    display: block;
    margin: 1px 0;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    overflow: hidden;
    color: #67757c;
    white-space: nowrap
}
.analytics-info li span {
    font-size: 24px;
    vertical-align: middle
}
.stats-row {
    margin-bottom: 20px
}
.stats-row .stat-item {
    display: inline-block;
    padding-right: 15px
}
.stats-row .stat-item+.stat-item {
    padding-left: 15px;
    border-left: 1px solid rgba(120, 130, 140, 0.13)
}
.city-weather-days {
    margin: 0px
}
.city-weather-days li {
    text-align: center;
    padding: 15px 0
}
.city-weather-days li span {
    display: block;
    padding: 10px 0 0;
    color: #99abb4
}
.city-weather-days li i {
    display: block;
    font-size: 20px;
    color: #1976d2
}
.city-weather-days li h3 {
    font-weight: 300;
    margin-top: 5px
}
.comment-widgets {
    position: relative;
    margin-bottom: 10px
}
.comment-widgets .comment-row {
    border-bottom: 1px solid rgba(120, 130, 140, 0.13);
    padding: 15px
}
.comment-widgets .comment-row:last-child {
    border-bottom: 0px
}
.comment-widgets .comment-row.active,
.comment-widgets .comment-row:hover {
    background: rgba(0, 0, 0, 0.02)
}
.comment-text {
    padding: 15px 15px 15px 20px;
    width: 80%
}
.comment-text.active .comment-footer .action-icons,
.comment-text:hover .comment-footer .action-icons {
    visibility: visible
}
.comment-text p {
    max-height: 50px;
    width: 100%;
    overflow: hidden
}
.comment-footer .action-icons {
    visibility: hidden
}
.comment-footer .action-icons a {
    padding-left: 7px;
    vertical-align: middle;
    color: #99abb4
}
.comment-footer .action-icons a.active,
.comment-footer .action-icons a:hover {
    color: #1976d2
}
.todo-list li {
    border: 0px;
    margin-bottom: 0px;
    padding: 20px 15px 15px 0px
}
.todo-list li .checkbox {
    width: 100%
}
.todo-list li .checkbox label {
    font-weight: 400;
    color: #455a64
}
.todo-list li:last-child {
    border-bottom: 0px
}
.todo-list li .assignedto {
    padding: 0px 0 0 27px;
    margin: 0px
}
.todo-list li .assignedto li {
    list-style: none;
    padding: 0px;
    display: inline-block;
    border: 0px;
    margin-right: 2px
}
.todo-list li .assignedto li img {
    width: 30px;
    border-radius: 100%
}
.todo-list li .item-date {
    padding-left: 25px;
    font-size: 12px;
    display: inline-block
}
.list-task .task-done span {
    text-decoration: line-through
}
.chat-list {
    margin: 0px;
    padding: 0px
}
.chat-list li {
    list-style: none;
    margin-top: 30px
}
.chat-list li .chat-img {
    display: inline-block;
    width: 45px;
    vertical-align: top
}
.chat-list li .chat-img img {
    width: 45px;
    border-radius: 100%
}
.chat-list li .chat-content {
    width: calc(100% - 140px);
    display: inline-block;
    padding-left: 15px
}
.chat-list li .chat-content h5 {
    color: #263238
}
.chat-list li .chat-content .box {
    display: inline-block;
    margin-bottom: 10px;
    position: relative
}
.chat-list li .chat-content .box:after {
    right: 99%;
    top: 0;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-top-color: #cfecfe;
    border-width: 8px;
    margin-left: -1px;
    border-right-color: #cfecfe
}
.chat-list li .chat-time {
    display: block;
    text-align: right;
    width: 80px;
    margin-left: 28px;
    font-size: 10px;
    color: #99abb4
}
.chat-list li.odd .chat-content {
    text-align: right;
    width: calc(100% - 90px)
}
.chat-list li.odd .box {
    clear: both
}
.chat-list li.odd+.odd {
    margin-top: 0px
}
.chat-list li.reverse {
    text-align: right
}
.chat-list li.reverse .box:after {
    left: 99%;
    right: auto;
    border-right-color: transparent;
    border-left-color: #f6f6f6;
    border-top-color: #f6f6f6
}
.chat-list li.reverse .chat-time {
    text-align: right;
    margin-left: auto;
    margin-right: 65px
}
.chat-list li.reverse .chat-content {
    padding-left: 0px;
    padding-right: 15px
}
.message-box ul li .drop-title {
    font-weight: 500;
    padding: 11px 20px 15px;
    border-bottom: 1px solid rgba(120, 130, 140, 0.13)
}
.message-box ul li .nav-link {
    border-top: 1px solid rgba(120, 130, 140, 0.13);
    padding-top: 15px
}
.message-box .message-widget {
    position: relative
}
.message-box .message-widget a {
    border-bottom: 1px solid rgba(120, 130, 140, 0.13);
    display: block;
    text-decoration: none;
    padding: 9px 15px
}
.message-box .message-widget a:hover {
    background: #f2f4f8
}
.message-box .message-widget a:last-child {
    border-bottom: 0px
}
.message-box .message-widget a div {
    white-space: normal
}
.message-box .message-widget a .user-img {
    width: 45px;
    position: relative;
    display: inline-block;
    margin: 0 10px 15px 0
}
.message-box .message-widget a .user-img img {
    width: 100%
}
.message-box .message-widget a .user-img .profile-status {
    border: 2px solid #ffffff;
    border-radius: 50%;
    display: inline-block;
    height: 10px;
    left: 33px;
    position: absolute;
    top: -1px;
    width: 10px
}
.message-box .message-widget a .user-img .online {
    background: #26dad2
}
.message-box .message-widget a .user-img .busy {
    background: #ef5350
}
.message-box .message-widget a .user-img .away {
    background: #ffb22b
}
.message-box .message-widget a .user-img .offline {
    background: #ffb22b
}
.message-box .message-widget a .mail-contnet {
    display: inline-block;
    width: 73%;
    vertical-align: middle
}
.message-box .message-widget a .mail-contnet h5 {
    margin: 5px 0px 0
}
.message-box .message-widget a .mail-contnet .mail-desc,
.message-box .message-widget a .mail-contnet .time {
    font-size: 12px;
    display: block;
    margin: 1px 0;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    overflow: hidden;
    color: #67757c;
    white-space: nowrap
}
.calendar {
    float: left;
    margin-bottom: 0px
}
.fc-view {
    margin-top: 30px
}
.none-border .modal-footer {
    border-top: none
}
.fc-toolbar {
    margin-bottom: 5px;
    margin-top: 15px
}
.fc-toolbar h2 {
    font-size: 18px;
    font-weight: 500;
    line-height: 30px;
    text-transform: uppercase
}
.fc-day {
    background: #ffffff
}
.fc-toolbar .fc-state-active,
.fc-toolbar .ui-state-active,
.fc-toolbar .ui-state-hover,
.fc-toolbar button:focus,
.fc-toolbar button:hover {
    z-index: 0
}
.fc-widget-header {
    border: 0px!important
}
.fc-widget-content {
    border-color: rgba(120, 130, 140, 0.13)!important
}
.fc th.fc-widget-header {
    color: #67757c;
    font-size: 13px;
    font-weight: 300;
    line-height: 20px;
    padding: 7px 0px;
    text-transform: uppercase
}
.fc th.fc-sat,
.fc th.fc-sun,
.fc th.fc-thu,
.fc th.fc-tue {
    background: #f2f7f8
}
.fc th.fc-fri,
.fc th.fc-mon,
.fc th.fc-wed {
    background: #f2f7f8
}
.fc-view {
    margin-top: 0px
}
.fc-toolbar {
    margin: 0px;
    padding: 24px 0px
}
.fc-button {
    background: #ffffff;
    border: 1px solid rgba(120, 130, 140, 0.13);
    color: #67757c;
    text-transform: capitalize
}
.fc-button:hover {
    background: #f2f4f8;
    opacity: 0.8
}
.fc-text-arrow {
    font-family: inherit;
    font-size: 16px
}
.fc-state-hover {
    background: #F5F5F5
}
.fc-unthemed .fc-today {
    border: 1px solid #ef5350;
    background: #f2f4f8!important
}
.fc-state-highlight {
    background: #f0f0f0
}
.fc-cell-overlay {
    background: #f0f0f0
}
.fc-unthemed .fc-today {
    background: #ffffff
}
.fc-event {
    border-radius: 0px;
    border: none;
    cursor: move;
    color: #ffffff!important;
    font-size: 13px;
    margin: 1px -1px 0 -1px;
    padding: 5px 5px;
    text-align: center;
    background: #1976d2
}
.calendar-event {
    cursor: move;
    margin: 10px 5px 0 0;
    padding: 6px 10px;
    display: inline-block;
    color: #ffffff;
    min-width: 140px;
    text-align: center;
    background: #1976d2
}
.calendar-event a {
    float: right;
    opacity: 0.6;
    font-size: 10px;
    margin: 4px 0 0 10px;
    color: #ffffff
}
.fc-basic-view td.fc-week-number span {
    padding-right: 5px
}
.fc-basic-view .fc-day-number {
    padding: 10px 15px;
    display: inline-block
}
.steamline {
    position: relative;
    border-left: 1px solid rgba(120, 130, 140, 0.13);
    margin-left: 20px
}
.steamline .sl-left {
    float: left;
    margin-left: -20px;
    z-index: 1;
    width: 40px;
    line-height: 40px;
    text-align: center;
    height: 40px;
    border-radius: 100%;
    color: #ffffff;
    background: #263238;
    margin-right: 15px
}
.steamline .sl-left img {
    max-width: 40px
}
.steamline .sl-right {
    padding-left: 50px
}
.steamline .sl-right .desc,
.steamline .sl-right .inline-photos {
    margin-bottom: 30px
}
.steamline .sl-item {
    border-bottom: 1px solid rgba(120, 130, 140, 0.13);
    margin: 20px 0
}
.sl-date {
    font-size: 10px;
    color: #99abb4
}
.time-item {
    border-color: rgba(120, 130, 140, 0.13);
    padding-bottom: 1px;
    position: relative
}
.time-item:before {
    content: " ";
    display: table
}
.time-item:after {
    background-color: #ffffff;
    border-color: rgba(120, 130, 140, 0.13);
    border-radius: 10px;
    border-style: solid;
    border-width: 2px;
    bottom: 0;
    content: '';
    height: 14px;
    left: 0;
    margin-left: -8px;
    position: absolute;
    top: 5px;
    width: 14px
}
.time-item-item:after {
    content: " ";
    display: table
}
.item-info {
    margin-bottom: 15px;
    margin-left: 15px
}
.item-info p {
    margin-bottom: 10px!important
}
.feeds {
    margin: 0px;
    padding: 0px
}
.feeds li {
    list-style: none;
    padding: 10px;
    display: block
}
.feeds li:hover {
    background: #ebf3f5
}
.feeds li>div {
    width: 40px;
    height: 40px;
    margin-right: 5px;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    border-radius: 100%
}
.feeds li>div i {
    line-height: 40px
}
.feeds li span {
    float: right;
    width: auto;
    font-size: 12px
}
.vert .carousel-item-next.carousel-item-left,
.vert .carousel-item-prev.carousel-item-right {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
}
.vert .active.carousel-item-right,
.vert .carousel-item-next {
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100% 0)
}
.vert .active.carousel-item-left,
.vert .carousel-item-prev {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
}
.social-widget .soc-header {
    padding: 15px;
    text-align: center;
    font-size: 36px;
    color: #fff
}
.social-widget .soc-header.box-facebook {
    background: #3b5998
}
.social-widget .soc-header.box-twitter {
    background: #00aced
}
.social-widget .soc-header.box-google {
    background: #f86c6b
}
.social-widget .soc-header.box-linkedin {
    background: #4875b4
}
.social-widget .soc-content {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    text-align: center
}
.social-widget .soc-content div {
    padding: 10px
}
.social-widget .soc-content div h3 {
    margin-bottom: 0px
}
.gaugejs-box {
    position: relative;
    margin: 0 auto
}
.gaugejs-box canvas.gaugejs {
    width: 100%!important;
    height: auto!important
}
.social-profile-first {
    text-align: center;
    padding-top: 22%;
    margin-bottom: 96px
}
.social-profile-first.bg-over {
    background: rgba(56, 83, 161, 0.7)
}
.social-profile-first .middle {
    vertical-align: middle
}
.country-state {
    list-style: none;
    margin: 0;
    padding: 0 0 0 10px
}
.country-state li {
    margin-top: 30px;
    margin-bottom: 10px
}
.country-state h2 {
    margin-bottom: 0px;
    font-weight: 400
}
.profiletimeline {
    position: relative;
    padding-left: 40px;
    margin-right: 10px;
    border-left: 1px solid rgba(120, 130, 140, 0.13);
    margin-left: 30px
}
.profiletimeline .sl-left {
    float: left;
    margin-left: -60px;
    z-index: 1;
    margin-right: 15px
}
.profiletimeline .sl-left img {
    max-width: 40px
}
.profiletimeline .sl-item {
    margin-top: 8px;
    margin-bottom: 30px
}
.profiletimeline .sl-date {
    font-size: 12px;
    color: #99abb4
}
.profiletimeline .time-item {
    border-color: rgba(120, 130, 140, 0.13);
    padding-bottom: 1px;
    position: relative
}
.profiletimeline .time-item:before {
    content: " ";
    display: table
}
.profiletimeline .time-item:after {
    background-color: #ffffff;
    border-color: rgba(120, 130, 140, 0.13);
    border-radius: 10px;
    border-style: solid;
    border-width: 2px;
    bottom: 0;
    content: '';
    height: 14px;
    left: 0;
    margin-left: -8px;
    position: absolute;
    top: 5px;
    width: 14px
}
.profiletimeline .time-item-item:after {
    content: " ";
    display: table
}
.profiletimeline .item-info {
    margin-bottom: 15px;
    margin-left: 15px
}
.profiletimeline .item-info p {
    margin-bottom: 10px!important
}
.blog-widget {
    margin-top: 30px
}
.blog-widget .blog-image img {
    border-radius: 4px;
    margin-top: -45px;
    margin-bottom: 20px;
    -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2)
}
.weather-small h1 {
    line-height: 30px
}
.weather-small sup {
    font-size: 60%
}
.little-profile .pro-img {
    margin-top: -80px;
    margin-bottom: 20px
}
.little-profile .pro-img img {
    width: 128px;
    height: 128px;
    -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    border-radius: 100%
}
.contact-box {
    position: relative
}
.contact-box .add-ct-btn {
    position: absolute;
    right: 4px;
    top: -46px
}
.contact-box .contact-widget>a {
    padding: 15px 10px
}
.contact-box .contact-widget>a .user-img {
    margin-bottom: 0px!important
}
@media (min-width: 1600px) {
    .col-xlg-1,
    .col-xlg-2,
    .col-xlg-3,
    .col-xlg-4,
    .col-xlg-5,
    .col-xlg-6,
    .col-xlg-7,
    .col-xlg-8,
    .col-xlg-9,
    .col-xlg-10,
    .col-xlg-11,
    .col-xlg-12 {
        float: left
    }
    .col-xlg-12 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }
    .col-xlg-11 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 91.66666667%;
        -ms-flex: 0 0 91.66666667%;
        flex: 0 0 91.66666667%;
        max-width: 91.66666667%
    }
    .col-xlg-10 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 83.33333333%;
        -ms-flex: 0 0 83.33333333%;
        flex: 0 0 83.33333333%;
        max-width: 83.33333333%
    }
    .col-xlg-9 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 75%;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }
    .col-xlg-8 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 66.66666667%;
        -ms-flex: 0 0 66.66666667%;
        flex: 0 0 66.66666667%;
        max-width: 66.66666667%
    }
    .col-xlg-7 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 58.33333333%;
        -ms-flex: 0 0 58.33333333%;
        flex: 0 0 58.33333333%;
        max-width: 58.33333333%
    }
    .col-xlg-6 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 50%;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }
    .col-xlg-5 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 41.66666667%;
        -ms-flex: 0 0 41.66666667%;
        flex: 0 0 41.66666667%;
        max-width: 41.66666667%
    }
    .col-xlg-4 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 33.33333333%;
        -ms-flex: 0 0 33.33333333%;
        flex: 0 0 33.33333333%;
        max-width: 33.33333333%
    }
    .col-xlg-3 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 25%;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }
    .col-xlg-2 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 16.66666667%;
        -ms-flex: 0 0 16.66666667%;
        flex: 0 0 16.66666667%;
        max-width: 16.66666667%
    }
    .col-xlg-1 {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 8.33333333%;
        -ms-flex: 0 0 8.33333333%;
        flex: 0 0 8.33333333%;
        max-width: 8.33333333%
    }
    .col-xlg-pull-12 {
        right: 100%
    }
    .col-xlg-pull-11 {
        right: 91.66666667%
    }
    .col-xlg-pull-10 {
        right: 83.33333333%
    }
    .col-xlg-pull-9 {
        right: 75%
    }
    .col-xlg-pull-8 {
        right: 66.66666667%
    }
    .col-xlg-pull-7 {
        right: 58.33333333%
    }
    .col-xlg-pull-6 {
        right: 50%
    }
    .col-xlg-pull-5 {
        right: 41.66666667%
    }
    .col-xlg-pull-4 {
        right: 33.33333333%
    }
    .col-xlg-pull-3 {
        right: 25%
    }
    .col-xlg-pull-2 {
        right: 16.66666667%
    }
    .col-xlg-pull-1 {
        right: 8.33333333%
    }
    .col-xlg-pull-0 {
        right: auto
    }
    .col-xlg-push-12 {
        left: 100%
    }
    .col-xlg-push-11 {
        left: 91.66666667%
    }
    .col-xlg-push-10 {
        left: 83.33333333%
    }
    .col-xlg-push-9 {
        left: 75%
    }
    .col-xlg-push-8 {
        left: 66.66666667%
    }
    .col-xlg-push-7 {
        left: 58.33333333%
    }
    .col-xlg-push-6 {
        left: 50%
    }
    .col-xlg-push-5 {
        left: 41.66666667%
    }
    .col-xlg-push-4 {
        left: 33.33333333%
    }
    .col-xlg-push-3 {
        left: 25%
    }
    .col-xlg-push-2 {
        left: 16.66666667%
    }
    .col-xlg-push-1 {
        left: 8.33333333%
    }
    .col-xlg-push-0 {
        left: auto
    }
    .offset-xlg-12 {
        margin-left: 100%
    }
    .offset-xlg-11 {
        margin-left: 91.66666667%
    }
    .offset-xlg-10 {
        margin-left: 83.33333333%
    }
    .offset-xlg-9 {
        margin-left: 75%
    }
    .offset-xlg-8 {
        margin-left: 66.66666667%
    }
    .offset-xlg-7 {
        margin-left: 58.33333333%
    }
    .offset-xlg-6 {
        margin-left: 50%
    }
    .offset-xlg-5 {
        margin-left: 41.66666667%
    }
    .offset-xlg-4 {
        margin-left: 33.33333333%
    }
    .offset-xlg-3 {
        margin-left: 25%
    }
    .offset-xlg-2 {
        margin-left: 16.66666667%
    }
    .offset-xlg-1 {
        margin-left: 8.33333333%
    }
    .offset-xlg-0 {
        margin-left: 0
    }
}
.col-xlg-1,
.col-xlg-2,
.col-xlg-3,
.col-xlg-4,
.col-xlg-5,
.col-xlg-6,
.col-xlg-7,
.col-xlg-8,
.col-xlg-9,
.col-xlg-10,
.col-xlg-11,
.col-xlg-12 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px
}
.bootstrap-touchspin .input-group-btn {
    -webkit-box-align: normal;
    -webkit-align-items: normal;
    -ms-flex-align: normal;
    align-items: normal
}
.form-control-danger,
.form-control-success,
.form-control-warning {
    padding-right: 2.25rem;
    background-repeat: no-repeat;
    background-position: center right .5625rem;
    -webkit-background-size: 1.125rem 1.125rem;
    background-size: 1.125rem 1.125rem
}
.has-success .col-form-label,
.has-success .custom-control,
.has-success .form-check-label,
.has-success .form-control-feedback,
.has-success .form-control-label {
    color: #26dad2
}
.has-success .form-control-success {
    background-image: url("../../assets/images/icon/success.svg")
}
.has-success .form-control {
    border-color: #26dad2
}
.has-warning .col-form-label,
.has-warning .custom-control,
.has-warning .form-check-label,
.has-warning .form-control-feedback,
.has-warning .form-control-label {
    color: #ffb22b
}
.has-warning .form-control-warning {
    background-image: url("../../assets/images/icon/warning.svg")
}
.has-warning .form-control {
    border-color: #ffb22b
}
.has-danger .col-form-label,
.has-danger .custom-control,
.has-danger .form-check-label,
.has-danger .form-control-feedback,
.has-danger .form-control-label {
    color: #ef5350
}
.has-danger .form-control-danger {
    background-image: url("../../assets/images/icon/danger.svg")
}
.has-danger .form-control {
    border-color: #ef5350
}
.input-group-addon [type=checkbox]:checked,
.input-group-addon [type=checkbox]:not(:checked),
.input-group-addon [type=radio]:checked,
.input-group-addon [type=radio]:not(:checked) {
    position: initial;
    opacity: 1
}
.invisible {
    visibility: hidden!important
}
.hidden-xs-up {
    display: none!important
}
@media (max-width: 575px) {
    .hidden-xs-down {
        display: none!important
    }
}
@media (min-width: 576px) {
    .hidden-sm-up {
        display: none!important
    }
}
@media (max-width: 767px) {
    .hidden-sm-down {
        display: none!important
    }
}
@media (min-width: 768px) {
    .hidden-md-up {
        display: none!important
    }
}
@media (max-width: 991px) {
    .hidden-md-down {
        display: none!important
    }
}
@media (min-width: 992px) {
    .hidden-lg-up {
        display: none!important
    }
}
@media (max-width: 1199px) {
    .hidden-lg-down {
        display: none!important
    }
}
@media (min-width: 1200px) {
    .hidden-xl-up {
        display: none!important
    }
}
.hidden-xl-down {
    display: none!important
}
.card-inverse .card-blockquote,
.card-inverse .card-footer,
.card-inverse .card-header,
.card-inverse .card-title {
    color: #ffffff
}
@media (min-width: 1650px) {
    .widget-app-columns {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3
    }
    .campaign {
        height: 365px!important
    }
}
@media (max-width: 1370px) {
    .widget-app-columns {
        -webkit-column-count: 2;
        -moz-column-count: 2;
        column-count: 2
    }
}
@media (min-width: 1024px) {
    .page-wrapper {
        margin-left: 240px
    }
    .footer {
        left: 240px
    }
}
@media (max-width: 1023px) {
    .page-wrapper {
        margin-left: 60px;
        -webkit-transition: 0.2s ease-in;
        -o-transition: 0.2s ease-in;
        transition: 0.2s ease-in
    }
    .footer {
        left: 60px
    }
    .widget-app-columns {
        -webkit-column-count: 1;
        -moz-column-count: 1;
        column-count: 1
    }
    .inbox-center a {
        width: 200px
    }
}
@media (min-width: 768px) {
    .navbar-header {
        width: 240px;
        -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
        flex-shrink: 0
    }
    .navbar-header .navbar-brand {
        padding-top: 0px
    }
    .page-titles .breadcrumb {
        float: right
    }
    .card-group .card:first-child,
    .card-group .card:not(:first-child):not(:last-child) {
        border-right: 1px solid rgba(0, 0, 0, 0.03)
    }
    .material-icon-list-demo .icons div {
        width: 33%;
        padding: 15px;
        display: inline-block;
        line-height: 40px
    }
    .mini-sidebar .page-wrapper {
        margin-left: 60px
    }
    .mini-sidebar .footer {
        left: 60px
    }
    .flex-wrap {
        -ms-flex-wrap: nowrap!important;
        flex-wrap: nowrap!important;
        -webkit-flex-wrap: nowrap!important
    }
}
@media (max-width: 767px) {
    .topbar {
        position: fixed;
        width: 100%
    }
    .topbar .top-navbar {
        padding-right: 15px;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-align-items: center
    }
    .topbar .top-navbar .navbar-collapse {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%
    }
    .topbar .top-navbar .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row
    }
    .topbar .top-navbar .navbar-nav>.nav-item.show {
        position: static
    }
    .topbar .top-navbar .navbar-nav>.nav-item.show .dropdown-menu {
        width: 100%;
        margin-top: 0px
    }
    .topbar .top-navbar .navbar-nav>.nav-item>.nav-link {
        padding-left: .50rem;
        padding-right: .50rem
    }
    .topbar .top-navbar .navbar-nav .dropdown-menu {
        position: absolute
    }
    .mega-dropdown .dropdown-menu {
        height: 480px;
        overflow: auto
    }
    .mini-sidebar .page-wrapper {
        margin-left: 0px;
        padding-top: 60px
    }
    .comment-text .comment-footer .action-icons {
        display: block;
        padding: 10px 0
    }
    .vtabs .tabs-vertical {
        width: auto
    }
    .footer {
        left: 0px
    }
    .material-icon-list-demo .icons div {
        width: 100%
    }
    .error-page .footer {
        position: fixed;
        bottom: 0px;
        z-index: 10
    }
    .error-box {
        position: relative;
        padding-bottom: 60px
    }
    .error-body {
        padding-top: 10%
    }
    .error-body h1 {
        font-size: 100px;
        font-weight: 600;
        line-height: 100px
    }
    .login-register {
        position: relative;
        overflow: hidden
    }
    .login-box {
        width: 90%
    }
    .login-sidebar {
        padding: 10% 0
    }
    .login-sidebar .login-box {
        position: relative
    }
    .chat-main-box .chat-left-aside {
        left: -250px;
        position: absolute;
        -webkit-transition: 0.5s ease-in;
        -o-transition: 0.5s ease-in;
        transition: 0.5s ease-in;
        background: #ffffff
    }
    .chat-main-box .chat-left-aside.open-pnl {
        left: 0px
    }
    .chat-main-box .chat-left-aside .open-panel {
        display: block
    }
    .chat-main-box .chat-right-aside {
        width: 100%
    }
    ul.timeline:before {
        left: 40px
    }
    ul.timeline>li>.timeline-panel {
        width: calc(100% - 90px)
    }
    ul.timeline>li>.timeline-badge {
        top: 16px;
        left: 15px;
        margin-left: 0
    }
    ul.timeline>li>.timeline-panel {
        float: right
    }
    ul.timeline>li>.timeline-panel:before {
        right: auto;
        left: -15px;
        border-right-width: 15px;
        border-left-width: 0
    }
    ul.timeline>li>.timeline-panel:after {
        right: auto;
        left: -14px;
        border-right-width: 14px;
        border-left-width: 0
    }
    .left-aside {
        width: 100%;
        position: relative;
        border: 0px
    }
    .right-aside {
        margin-left: 0px
    }
    .flex-wrap {
        -ms-flex-wrap: wrap!important;
        flex-wrap: wrap!important;
        -webkit-flex-wrap: wrap!important
    }
    .chat-list li .chat-content {
        width: calc(100% - 80px)
    }
}
.preloader {
    width: 100%;
    height: 100%;
    top: 0px;
    position: fixed;
    z-index: 99999;
    background: #fff
}
.preloader .cssload-speeding-wheel {
    position: absolute;
    top: calc(50% - 3.5px);
    left: calc(50% - 3.5px)
}
[type=radio]:checked,
[type=radio]:not(:checked) {
    position: absolute;
    left: -9999px;
    opacity: 0
}
[type=radio]:checked+label,
[type=radio]:not(:checked)+label {
    position: relative;
    padding-left: 35px;
    cursor: pointer;
    display: inline-block;
    height: 25px;
    line-height: 25px;
    font-size: 1rem;
    -webkit-transition: .28s ease;
    -o-transition: .28s ease;
    transition: .28s ease;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}
[type=radio]+label:after,
[type=radio]+label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    margin: 4px;
    width: 16px;
    height: 16px;
    z-index: 0;
    -webkit-transition: .28s ease;
    -o-transition: .28s ease;
    transition: .28s ease
}
[type=radio].with-gap:checked+label:after,
[type=radio].with-gap:checked+label:before,
[type=radio]:checked+label:after,
[type=radio]:checked+label:before,
[type=radio]:not(:checked)+label:after,
[type=radio]:not(:checked)+label:before {
    border-radius: 50%
}
[type=radio]:not(:checked)+label:after,
[type=radio]:not(:checked)+label:before {
    border: 1px solid #b1b8bb
}
[type=radio]:not(:checked)+label:after {
    z-index: -1;
    -webkit-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0)
}
[type=radio]:checked+label:before {
    border: 2px solid transparent;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap:checked+label:after,
[type=radio].with-gap:checked+label:before,
[type=radio]:checked+label:after {
    border: 2px solid #26a69a
}
[type=radio].with-gap:checked+label:after,
[type=radio]:checked+label:after {
    background-color: #26a69a;
    z-index: 0
}
[type=radio]:checked+label:after {
    -webkit-transform: scale(1.02);
    -ms-transform: scale(1.02);
    transform: scale(1.02)
}
[type=radio].with-gap:checked+label:after {
    -webkit-transform: scale(0.5);
    -ms-transform: scale(0.5);
    transform: scale(0.5)
}
[type=radio].tabbed:focus+label:before {
    -webkit-box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap:disabled:checked+label:before {
    border: 2px solid rgba(0, 0, 0, 0.26);
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap:disabled:checked+label:after {
    border: none;
    background-color: rgba(0, 0, 0, 0.26)
}
[type=radio]:disabled:checked+label:before,
[type=radio]:disabled:not(:checked)+label:before {
    background-color: transparent;
    border-color: rgba(0, 0, 0, 0.26);
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio]:disabled+label {
    color: rgba(0, 0, 0, 0.26)
}
[type=radio]:disabled:not(:checked)+label:before {
    border-color: rgba(0, 0, 0, 0.26)
}
[type=radio]:disabled:checked+label:after {
    background-color: rgba(0, 0, 0, 0.26);
    border-color: #BDBDBD
}
form p {
    margin-bottom: 10px;
    text-align: left
}
form p:last-child {
    margin-bottom: 0
}
[type=checkbox]:checked,
[type=checkbox]:not(:checked) {
    position: absolute;
    left: -9999px;
    opacity: 0
}
[type=checkbox] {}[type=checkbox]+label {
    position: relative;
    padding-left: 35px;
    cursor: pointer;
    display: inline-block;
    height: 25px;
    line-height: 25px;
    font-size: 1rem;
    -webkit-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -ms-user-select: none
}
[type=checkbox]+label:before,
[type=checkbox]:not(.filled-in)+label:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 18px;
    height: 18px;
    z-index: 0;
    border: 1px solid #b1b8bb;
    border-radius: 1px;
    margin-top: 2px;
    -webkit-transition: .2s;
    -o-transition: .2s;
    transition: .2s
}
[type=checkbox]:not(.filled-in)+label:after {
    border: 0;
    -webkit-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0)
}
[type=checkbox]:not(:checked):disabled+label:before {
    border: none;
    background-color: rgba(0, 0, 0, 0.26)
}
[type=checkbox].tabbed:focus+label:after {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    border: 0;
    border-radius: 50%;
    -webkit-box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
    box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: rgba(0, 0, 0, 0.1)
}
[type=checkbox]:checked+label:before {
    top: -4px;
    left: -5px;
    width: 12px;
    height: 22px;
    border-top: 2px solid transparent;
    border-left: 2px solid transparent;
    border-right: 2px solid #26a69a;
    border-bottom: 2px solid #26a69a;
    -webkit-transform: rotate(40deg);
    -ms-transform: rotate(40deg);
    transform: rotate(40deg);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform-origin: 100% 100%;
    -ms-transform-origin: 100% 100%;
    transform-origin: 100% 100%
}
[type=checkbox]:checked:disabled+label:before {
    border-right: 2px solid rgba(0, 0, 0, 0.26);
    border-bottom: 2px solid rgba(0, 0, 0, 0.26)
}
[type=checkbox]:indeterminate+label:before {
    top: -11px;
    left: -12px;
    width: 10px;
    height: 22px;
    border-top: none;
    border-left: none;
    border-right: 2px solid #26a69a;
    border-bottom: none;
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform-origin: 100% 100%;
    -ms-transform-origin: 100% 100%;
    transform-origin: 100% 100%
}
[type=checkbox]:indeterminate:disabled+label:before {
    border-right: 2px solid rgba(0, 0, 0, 0.26);
    background-color: transparent
}
[type=checkbox].filled-in+label:after {
    border-radius: 2px
}
[type=checkbox].filled-in+label:after,
[type=checkbox].filled-in+label:before {
    content: '';
    left: 0;
    position: absolute;
    -webkit-transition: border .25s, background-color .25s, width .20s .1s, height .20s .1s, top .20s .1s, left .20s .1s;
    -o-transition: border .25s, background-color .25s, width .20s .1s, height .20s .1s, top .20s .1s, left .20s .1s;
    transition: border .25s, background-color .25s, width .20s .1s, height .20s .1s, top .20s .1s, left .20s .1s;
    z-index: 1
}
[type=checkbox].filled-in:not(:checked)+label:before {
    width: 0;
    height: 0;
    border: 3px solid transparent;
    left: 6px;
    top: 10px;
    -webkit-transform: rotateZ(37deg);
    -ms-transform: rotate(37deg);
    transform: rotateZ(37deg);
    -webkit-transform-origin: 20% 40%;
    -ms-transform-origin: 100% 100%;
    transform-origin: 100% 100%
}
[type=checkbox].filled-in:not(:checked)+label:after {
    height: 20px;
    width: 20px;
    background-color: transparent;
    border: 1px solid #b1b8bb;
    top: 0px;
    z-index: 0
}
[type=checkbox].filled-in:checked+label:before {
    top: 0;
    left: 1px;
    width: 8px;
    height: 13px;
    border-top: 2px solid transparent;
    border-left: 2px solid transparent;
    border-right: 2px solid #fff;
    border-bottom: 2px solid #fff;
    -webkit-transform: rotateZ(37deg);
    -ms-transform: rotate(37deg);
    transform: rotateZ(37deg);
    -webkit-transform-origin: 100% 100%;
    -ms-transform-origin: 100% 100%;
    transform-origin: 100% 100%
}
[type=checkbox].filled-in:checked+label:after {
    top: 0;
    width: 20px;
    height: 20px;
    border: 2px solid #26a69a;
    background-color: #26a69a;
    z-index: 0
}
[type=checkbox].filled-in.tabbed:focus+label:after {
    border-radius: 2px;
    border-color: #5a5a5a;
    background-color: rgba(0, 0, 0, 0.1)
}
[type=checkbox].filled-in.tabbed:checked:focus+label:after {
    border-radius: 2px;
    background-color: #26a69a;
    border-color: #26a69a
}
[type=checkbox].filled-in:disabled:not(:checked)+label:before {
    background-color: transparent;
    border: 2px solid transparent
}
[type=checkbox].filled-in:disabled:not(:checked)+label:after {
    border-color: transparent;
    background-color: #BDBDBD
}
[type=checkbox].filled-in:disabled:checked+label:before {
    background-color: transparent
}
[type=checkbox].filled-in:disabled:checked+label:after {
    background-color: #BDBDBD;
    border-color: #BDBDBD
}
.switch,
.switch * {
    -webkit-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -ms-user-select: none
}
.switch label {
    cursor: pointer
}
.switch label input[type=checkbox] {
    opacity: 0;
    width: 0;
    height: 0
}
.switch label input[type=checkbox]:checked+.lever {
    background-color: #84c7c1
}
.switch label input[type=checkbox]:checked+.lever:after {
    background-color: #26a69a;
    left: 24px
}
.switch label .lever {
    content: "";
    display: inline-block;
    position: relative;
    width: 40px;
    height: 15px;
    background-color: #818181;
    border-radius: 15px;
    margin-right: 10px;
    -webkit-transition: background 0.3s ease;
    -o-transition: background 0.3s ease;
    transition: background 0.3s ease;
    vertical-align: middle;
    margin: 0 16px
}
.switch label .lever:after {
    content: "";
    position: absolute;
    display: inline-block;
    width: 21px;
    height: 21px;
    background-color: #F1F1F1;
    border-radius: 21px;
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
    left: -5px;
    top: -3px;
    -webkit-transition: left 0.3s ease, background .3s ease, -webkit-box-shadow 0.1s ease;
    transition: left 0.3s ease, background .3s ease, -webkit-box-shadow 0.1s ease;
    -o-transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease;
    transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease;
    transition: left 0.3s ease, background .3s ease, box-shadow 0.1s ease, -webkit-box-shadow 0.1s ease
}
input[type=checkbox]:checked:not(:disabled).tabbed:focus~.lever:after,
input[type=checkbox]:checked:not(:disabled)~.lever:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 166, 154, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 166, 154, 0.1)
}
input[type=checkbox]:not(:disabled).tabbed:focus~.lever:after,
input[type=checkbox]:not(:disabled)~.lever:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.08);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.08)
}
.switch input[type=checkbox][disabled]+.lever {
    cursor: default
}
.switch label input[type=checkbox][disabled]+.lever:after,
.switch label input[type=checkbox][disabled]:checked+.lever:after {
    background-color: #BDBDBD
}
.scale-up {
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    -webkit-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0);
    display: inline-block;
    -webkit-transform-origin: right 0px;
    -ms-transform-origin: right 0px;
    transform-origin: right 0px
}
.scale-up-left {
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    -webkit-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0);
    display: inline-block;
    -webkit-transform-origin: left 0px;
    -ms-transform-origin: left 0px;
    transform-origin: left 0px
}
.show>.scale-up {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transform-origin: right 0px;
    -ms-transform-origin: right 0px;
    transform-origin: right 0px
}
.show>.scale-up-left {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transform-origin: left 0px;
    -ms-transform-origin: left 0px;
    transform-origin: left 0px
}
.card {
    -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
    border-radius: 4px
}
.well,
pre {
    -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1)
}
.page-titles .justify-content-end:last-child .d-flex {
    margin-right: 10px
}
.btn-circle.right-side-toggle {
    position: fixed;
    bottom: 20px;
    right: 20px;
    padding: 25px;
    z-index: 10
}
@-webkit-keyframes ripple {
    0% {
        -webkit-box-shadow: 0px 0px 0px 1px transparent;
        box-shadow: 0px 0px 0px 1px transparent
    }
    50% {
        -webkit-box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1)
    }
    to {
        -webkit-box-shadow: 0px 0px 0px 15px transparent;
        box-shadow: 0px 0px 0px 15px transparent
    }
}
@keyframes ripple {
    0% {
        -webkit-box-shadow: 0px 0px 0px 1px transparent;
        box-shadow: 0px 0px 0px 1px transparent
    }
    50% {
        -webkit-box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1)
    }
    to {
        -webkit-box-shadow: 0px 0px 0px 15px transparent;
        box-shadow: 0px 0px 0px 15px transparent
    }
}
.bootstrap-select.btn-group .dropdown-menu {
    margin-top: -40px;
    -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1)
}
.demo-checkbox label,
.demo-radio-button label {
    min-width: 200px;
    margin-bottom: 20px
}
.demo-swtich .demo-switch-title,
.demo-swtich .switch {
    width: 150px;
    margin-bottom: 10px;
    display: inline-block
}
[type=checkbox]+label {
    padding-left: 26px;
    height: 25px;
    line-height: 21px;
    font-weight: normal
}
[type=checkbox]:checked+label:before {
    top: -4px;
    left: -2px;
    width: 11px;
    height: 19px
}
[type=checkbox]:checked.chk-col-red+label:before {
    border-right: 2px solid #fb3a3a;
    border-bottom: 2px solid #fb3a3a
}
[type=checkbox]:checked.chk-col-pink+label:before {
    border-right: 2px solid #E91E63;
    border-bottom: 2px solid #E91E63
}
[type=checkbox]:checked.chk-col-purple+label:before {
    border-right: 2px solid #7460ee;
    border-bottom: 2px solid #7460ee
}
[type=checkbox]:checked.chk-col-deep-purple+label:before {
    border-right: 2px solid #673AB7;
    border-bottom: 2px solid #673AB7
}
[type=checkbox]:checked.chk-col-indigo+label:before {
    border-right: 2px solid #3F51B5;
    border-bottom: 2px solid #3F51B5
}
[type=checkbox]:checked.chk-col-blue+label:before {
    border-right: 2px solid #02bec9;
    border-bottom: 2px solid #02bec9
}
[type=checkbox]:checked.chk-col-light-blue+label:before {
    border-right: 2px solid #03A9F4;
    border-bottom: 2px solid #03A9F4
}
[type=checkbox]:checked.chk-col-cyan+label:before {
    border-right: 2px solid #00BCD4;
    border-bottom: 2px solid #00BCD4
}
[type=checkbox]:checked.chk-col-teal+label:before {
    border-right: 2px solid #009688;
    border-bottom: 2px solid #009688
}
[type=checkbox]:checked.chk-col-green+label:before {
    border-right: 2px solid #26c6da;
    border-bottom: 2px solid #26c6da
}
[type=checkbox]:checked.chk-col-light-green+label:before {
    border-right: 2px solid #8BC34A;
    border-bottom: 2px solid #8BC34A
}
[type=checkbox]:checked.chk-col-lime+label:before {
    border-right: 2px solid #CDDC39;
    border-bottom: 2px solid #CDDC39
}
[type=checkbox]:checked.chk-col-yellow+label:before {
    border-right: 2px solid #ffe821;
    border-bottom: 2px solid #ffe821
}
[type=checkbox]:checked.chk-col-amber+label:before {
    border-right: 2px solid #FFC107;
    border-bottom: 2px solid #FFC107
}
[type=checkbox]:checked.chk-col-orange+label:before {
    border-right: 2px solid #FF9800;
    border-bottom: 2px solid #FF9800
}
[type=checkbox]:checked.chk-col-deep-orange+label:before {
    border-right: 2px solid #FF5722;
    border-bottom: 2px solid #FF5722
}
[type=checkbox]:checked.chk-col-brown+label:before {
    border-right: 2px solid #795548;
    border-bottom: 2px solid #795548
}
[type=checkbox]:checked.chk-col-grey+label:before {
    border-right: 2px solid #9E9E9E;
    border-bottom: 2px solid #9E9E9E
}
[type=checkbox]:checked.chk-col-blue-grey+label:before {
    border-right: 2px solid #607D8B;
    border-bottom: 2px solid #607D8B
}
[type=checkbox]:checked.chk-col-black+label:before {
    border-right: 2px solid #000000;
    border-bottom: 2px solid #000000
}
[type=checkbox]:checked.chk-col-white+label:before {
    border-right: 2px solid #ffffff;
    border-bottom: 2px solid #ffffff
}
[type=checkbox].filled-in:checked+label:after {
    top: 0;
    width: 20px;
    height: 20px;
    border: 2px solid #26a69a;
    background-color: #26a69a;
    z-index: 0
}
[type=checkbox].filled-in:checked+label:before {
    border-right: 2px solid #fff!important;
    border-bottom: 2px solid #fff!important
}
[type=checkbox].filled-in:checked.chk-col-red+label:after {
    border: 2px solid #fb3a3a;
    background-color: #fb3a3a
}
[type=checkbox].filled-in:checked.chk-col-pink+label:after {
    border: 2px solid #E91E63;
    background-color: #E91E63
}
[type=checkbox].filled-in:checked.chk-col-purple+label:after {
    border: 2px solid #7460ee;
    background-color: #7460ee
}
[type=checkbox].filled-in:checked.chk-col-deep-purple+label:after {
    border: 2px solid #673AB7;
    background-color: #673AB7
}
[type=checkbox].filled-in:checked.chk-col-indigo+label:after {
    border: 2px solid #3F51B5;
    background-color: #3F51B5
}
[type=checkbox].filled-in:checked.chk-col-blue+label:after {
    border: 2px solid #02bec9;
    background-color: #02bec9
}
[type=checkbox].filled-in:checked.chk-col-light-blue+label:after {
    border: 2px solid #03A9F4;
    background-color: #03A9F4
}
[type=checkbox].filled-in:checked.chk-col-cyan+label:after {
    border: 2px solid #00BCD4;
    background-color: #00BCD4
}
[type=checkbox].filled-in:checked.chk-col-teal+label:after {
    border: 2px solid #009688;
    background-color: #009688
}
[type=checkbox].filled-in:checked.chk-col-green+label:after {
    border: 2px solid #26c6da;
    background-color: #26c6da
}
[type=checkbox].filled-in:checked.chk-col-light-green+label:after {
    border: 2px solid #8BC34A;
    background-color: #8BC34A
}
[type=checkbox].filled-in:checked.chk-col-lime+label:after {
    border: 2px solid #CDDC39;
    background-color: #CDDC39
}
[type=checkbox].filled-in:checked.chk-col-yellow+label:after {
    border: 2px solid #ffe821;
    background-color: #ffe821
}
[type=checkbox].filled-in:checked.chk-col-amber+label:after {
    border: 2px solid #FFC107;
    background-color: #FFC107
}
[type=checkbox].filled-in:checked.chk-col-orange+label:after {
    border: 2px solid #FF9800;
    background-color: #FF9800
}
[type=checkbox].filled-in:checked.chk-col-deep-orange+label:after {
    border: 2px solid #FF5722;
    background-color: #FF5722
}
[type=checkbox].filled-in:checked.chk-col-brown+label:after {
    border: 2px solid #795548;
    background-color: #795548
}
[type=checkbox].filled-in:checked.chk-col-grey+label:after {
    border: 2px solid #9E9E9E;
    background-color: #9E9E9E
}
[type=checkbox].filled-in:checked.chk-col-blue-grey+label:after {
    border: 2px solid #607D8B;
    background-color: #607D8B
}
[type=checkbox].filled-in:checked.chk-col-black+label:after {
    border: 2px solid #000000;
    background-color: #000000
}
[type=checkbox].filled-in:checked.chk-col-white+label:after {
    border: 2px solid #ffffff;
    background-color: #ffffff
}
[type=radio]:not(:checked)+label {
    padding-left: 26px;
    height: 25px;
    line-height: 25px;
    font-weight: normal
}
[type=radio]:checked+label {
    padding-left: 26px;
    height: 25px;
    line-height: 25px;
    font-weight: normal
}
[type=radio].radio-col-red:checked+label:after {
    background-color: #fb3a3a;
    border-color: #fb3a3a;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-pink:checked+label:after {
    background-color: #E91E63;
    border-color: #E91E63;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-purple:checked+label:after {
    background-color: #7460ee;
    border-color: #7460ee;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-deep-purple:checked+label:after {
    background-color: #673AB7;
    border-color: #673AB7;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-indigo:checked+label:after {
    background-color: #3F51B5;
    border-color: #3F51B5;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-blue:checked+label:after {
    background-color: #02bec9;
    border-color: #02bec9;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-light-blue:checked+label:after {
    background-color: #03A9F4;
    border-color: #03A9F4;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-cyan:checked+label:after {
    background-color: #00BCD4;
    border-color: #00BCD4;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-teal:checked+label:after {
    background-color: #009688;
    border-color: #009688;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-green:checked+label:after {
    background-color: #26c6da;
    border-color: #26c6da;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-light-green:checked+label:after {
    background-color: #8BC34A;
    border-color: #8BC34A;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-lime:checked+label:after {
    background-color: #CDDC39;
    border-color: #CDDC39;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-yellow:checked+label:after {
    background-color: #ffe821;
    border-color: #ffe821;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-amber:checked+label:after {
    background-color: #FFC107;
    border-color: #FFC107;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-orange:checked+label:after {
    background-color: #FF9800;
    border-color: #FF9800;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-deep-orange:checked+label:after {
    background-color: #FF5722;
    border-color: #FF5722;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-brown:checked+label:after {
    background-color: #795548;
    border-color: #795548;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-grey:checked+label:after {
    background-color: #9E9E9E;
    border-color: #9E9E9E;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-blue-grey:checked+label:after {
    background-color: #607D8B;
    border-color: #607D8B;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-black:checked+label:after {
    background-color: #000000;
    border-color: #000000;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].radio-col-white:checked+label:after {
    background-color: #ffffff;
    border-color: #ffffff;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-red:checked+label:before {
    border: 2px solid #fb3a3a;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-red:checked+label:after {
    background-color: #fb3a3a;
    border: 2px solid #fb3a3a;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-pink:checked+label:before {
    border: 2px solid #E91E63;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-pink:checked+label:after {
    background-color: #E91E63;
    border: 2px solid #E91E63;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-purple:checked+label:before {
    border: 2px solid #7460ee;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-purple:checked+label:after {
    background-color: #7460ee;
    border: 2px solid #7460ee;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-deep-purple:checked+label:before {
    border: 2px solid #673AB7;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-deep-purple:checked+label:after {
    background-color: #673AB7;
    border: 2px solid #673AB7;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-indigo:checked+label:before {
    border: 2px solid #3F51B5;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-indigo:checked+label:after {
    background-color: #3F51B5;
    border: 2px solid #3F51B5;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-blue:checked+label:before {
    border: 2px solid #02bec9;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-blue:checked+label:after {
    background-color: #02bec9;
    border: 2px solid #02bec9;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-light-blue:checked+label:before {
    border: 2px solid #03A9F4;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-light-blue:checked+label:after {
    background-color: #03A9F4;
    border: 2px solid #03A9F4;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-cyan:checked+label:before {
    border: 2px solid #00BCD4;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-cyan:checked+label:after {
    background-color: #00BCD4;
    border: 2px solid #00BCD4;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-teal:checked+label:before {
    border: 2px solid #009688;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-teal:checked+label:after {
    background-color: #009688;
    border: 2px solid #009688;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-green:checked+label:before {
    border: 2px solid #26c6da;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-green:checked+label:after {
    background-color: #26c6da;
    border: 2px solid #26c6da;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-light-green:checked+label:before {
    border: 2px solid #8BC34A;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-light-green:checked+label:after {
    background-color: #8BC34A;
    border: 2px solid #8BC34A;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-lime:checked+label:before {
    border: 2px solid #CDDC39;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-lime:checked+label:after {
    background-color: #CDDC39;
    border: 2px solid #CDDC39;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-yellow:checked+label:before {
    border: 2px solid #ffe821;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-yellow:checked+label:after {
    background-color: #ffe821;
    border: 2px solid #ffe821;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-amber:checked+label:before {
    border: 2px solid #FFC107;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-amber:checked+label:after {
    background-color: #FFC107;
    border: 2px solid #FFC107;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-orange:checked+label:before {
    border: 2px solid #FF9800;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-orange:checked+label:after {
    background-color: #FF9800;
    border: 2px solid #FF9800;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-deep-orange:checked+label:before {
    border: 2px solid #FF5722;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-deep-orange:checked+label:after {
    background-color: #FF5722;
    border: 2px solid #FF5722;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-brown:checked+label:before {
    border: 2px solid #795548;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-brown:checked+label:after {
    background-color: #795548;
    border: 2px solid #795548;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-grey:checked+label:before {
    border: 2px solid #9E9E9E;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-grey:checked+label:after {
    background-color: #9E9E9E;
    border: 2px solid #9E9E9E;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-blue-grey:checked+label:before {
    border: 2px solid #607D8B;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-blue-grey:checked+label:after {
    background-color: #607D8B;
    border: 2px solid #607D8B;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-black:checked+label:before {
    border: 2px solid #000000;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-black:checked+label:after {
    background-color: #000000;
    border: 2px solid #000000;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-white:checked+label:before {
    border: 2px solid #ffffff;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
[type=radio].with-gap.radio-col-white:checked+label:after {
    background-color: #ffffff;
    border: 2px solid #ffffff;
    -webkit-animation: ripple 0.2s linear forwards;
    animation: ripple 0.2s linear forwards
}
.switch label {
    font-weight: normal;
    font-size: 13px
}
.switch label .lever {
    margin: 0 14px
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-red:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(251, 58, 58, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(251, 58, 58, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-red {
    background-color: rgba(251, 58, 58, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-red:after {
    background-color: #fb3a3a
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-pink:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(233, 30, 99, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(233, 30, 99, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-pink {
    background-color: rgba(233, 30, 99, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-pink:after {
    background-color: #E91E63
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-purple:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(116, 96, 238, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(116, 96, 238, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-purple {
    background-color: rgba(116, 96, 238, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-purple:after {
    background-color: #7460ee
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-deep-purple:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(103, 58, 183, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(103, 58, 183, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-deep-purple {
    background-color: rgba(103, 58, 183, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-deep-purple:after {
    background-color: #673AB7
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-indigo:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(63, 81, 181, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(63, 81, 181, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-indigo {
    background-color: rgba(63, 81, 181, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-indigo:after {
    background-color: #3F51B5
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-blue:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(2, 190, 201, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(2, 190, 201, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-blue {
    background-color: rgba(2, 190, 201, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-blue:after {
    background-color: #02bec9
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-light-blue:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(3, 169, 244, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(3, 169, 244, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-light-blue {
    background-color: rgba(3, 169, 244, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-light-blue:after {
    background-color: #03A9F4
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-cyan:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 188, 212, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 188, 212, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-cyan {
    background-color: rgba(0, 188, 212, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-cyan:after {
    background-color: #00BCD4
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-teal:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 150, 136, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 150, 136, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-teal {
    background-color: rgba(0, 150, 136, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-teal:after {
    background-color: #009688
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-green:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 198, 218, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(38, 198, 218, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-green {
    background-color: rgba(38, 198, 218, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-green:after {
    background-color: #26c6da
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-light-green:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(139, 195, 74, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(139, 195, 74, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-light-green {
    background-color: rgba(139, 195, 74, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-light-green:after {
    background-color: #8BC34A
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-lime:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(205, 220, 57, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(205, 220, 57, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-lime {
    background-color: rgba(205, 220, 57, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-lime:after {
    background-color: #CDDC39
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-yellow:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 232, 33, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 232, 33, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-yellow {
    background-color: rgba(255, 232, 33, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-yellow:after {
    background-color: #ffe821
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-amber:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 193, 7, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 193, 7, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-amber {
    background-color: rgba(255, 193, 7, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-amber:after {
    background-color: #FFC107
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-orange:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 152, 0, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 152, 0, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-orange {
    background-color: rgba(255, 152, 0, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-orange:after {
    background-color: #FF9800
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-deep-orange:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 87, 34, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 87, 34, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-deep-orange {
    background-color: rgba(255, 87, 34, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-deep-orange:after {
    background-color: #FF5722
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-brown:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(121, 85, 72, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(121, 85, 72, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-brown {
    background-color: rgba(121, 85, 72, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-brown:after {
    background-color: #795548
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-grey:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(158, 158, 158, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(158, 158, 158, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-grey {
    background-color: rgba(158, 158, 158, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-grey:after {
    background-color: #9E9E9E
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-blue-grey:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(96, 125, 139, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(96, 125, 139, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-blue-grey {
    background-color: rgba(96, 125, 139, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-blue-grey:after {
    background-color: #607D8B
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-black:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-black {
    background-color: rgba(0, 0, 0, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-black:after {
    background-color: #000000
}
.switch label input[type=checkbox]:checked:not(:disabled)~.lever.switch-col-white:active:after {
    -webkit-box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 255, 255, 0.1);
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(255, 255, 255, 0.1)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-white {
    background-color: rgba(255, 255, 255, 0.5)
}
.switch label input[type=checkbox]:checked+.lever.switch-col-white:after {
    background-color: #ffffff
}
</style>
<style type="text/css">
    table td i { cursor: pointer; }
    .code_in .code { position: absolute; }
</style>
@endsection

@section('body-content')
      <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Account Settings</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">Account Settings</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 col-xlg-4">
                    <!-- Column -->
                    <div class="card">
                        <img class="card-img-top" src={{ asset('images/background/profile-bg.jpg') }} alt="Card image cap">
                        <div class="card-body little-profile text-center">
                            <div class="pro-img"><img src="{{ asset('images/profile/user/user.png') }}" alt="user" /></div>
                            <h3 class="m-b-0">
                                @if( auth('web')->check() )
                                {{ auth('web')->user()->name  }}                   
                                @endif
                            </h3>
                            <p>Standard User</p>
                            <button data-toggle="modal" data-target="#change-profile" class="m-t-10 waves-effect waves-dark btn btn-info btn-md btn-rounded">Edit Profile</button>
                            
                        </div>
                    </div>
            
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body bg-inverse" >
                            <h4 class="text-white card-title">My Profile</h4>
                            <h6 class="card-subtitle text-white m-0 op-5">Change Profile</h6>
                        </div>
                        <div id="change-profile" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog" id="eitFormHolder" data-anim="jello">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Change Profile Information</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="profileEditForm" action="" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <div class="input-group">
                                                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ auth('web')->user()->first_name }}">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ auth('web')->user()->last_name }}">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ auth('web')->user()->phone }}">
                                                <div class="input-group-addon"><i class="ti-mobile"></i></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ auth('web')->user()->address }}">
                                                <div class="input-group-addon"><i class="fas fa-map-marker-alt"></i>xfd</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                <input type="text" name="city" class="form-control" placeholder="City" value="{{ auth('web')->user()->city }}">
                                                <div class="input-group-addon"><i class="ti-map"></i></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                <input type="text" name="post_code" class="form-control" placeholder="Post Code" value="{{ auth('web')->user()->post_code }}">
                                                <div class="input-group-addon"><i class="ti-world"></i></div>
                                                </div>
                                            </div>
                                            {{-- <div class="form-group row">
                                                <div class="col-md-12">
                                                    <select name="country" class="form-control custom-select" data-placeholder="Your {{  auth('web')->user()->company_name }} Wallet - 19273.098 <?=$company->symbol;?> & 17.465 ETH" tabindex="1">
                                                        <?=($auth->user->country != '') ? '<option value="'.$auth->user->country.'">'.$auth->user->country.'</option>' : '<option value="">Select Country</option>'; ?>
                                                        <option value="Columbia">Columbia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                    </select>
                                                </div>
                                            </div> --}}
                                            <div style="background-color:#f1f1f1; border-left:5px solid #1976d2; padding:15px;">
                                                
                                                <table data-brackets-id='56505' class="table">
                                                  Change your profile with appropiate information.
                                                </table> 
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                        <button id="editBtn" class="btn btn-danger waves-effect waves-light" type="button"  onclick="_run(this)" data-form="profileEditForm" data-status="false" data-loading="<i class='fa fa-refresh fa-spin fa-1x fa-fw'></i>" data-validator="true" data-callback="false" data-notify="1" data-animation="eitFormHolder" data-btnid="editBtn">Submit</button>
        
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="card-body">
                            <div class="message-box contact-box">
                                <h2 class="add-ct-btn"><button type="button" data-toggle="modal" data-target="#change-profile" class="btn btn-circle btn-lg btn-success waves-effect waves-dark"><i class="ti ti-pencil"> </i></button></h2>
                                <div class="message-widget contact-widget">
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"> <span class="round"><i class="ti ti-email"> </i></span> <span class="profile-status away pull-right"></span></div> 
                                        <div class="mail-contnet">
                                            <h5>Email</h5> <span class="mail-desc">{{ auth('web')->user()->email }}</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"> <span class="round"><i class="ti ti-mobile"> </i></span> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Phone Number</h5> <span class="mail-desc">{{ auth('web')->user()->phone }}</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"> <span class="round"><i class="ti ti-location-pin"> </i></span> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Address</h5> <span class="mail-desc">{{ auth('web')->user()->address }}</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="user-img"> <span class="round"><i class="ti ti-world"> </i></span> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Country</h5> <span class="mail-desc">{{ auth('web')->user()->country }}</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        
            <div class="col-md-6 col-lg-5 col-xlg-5">
                <div class="card">
                    <div class="card-body">
                        
                        <h4 class="card-title">Security Settings</h4>
                        <h6 class="card-subtitle">Manage Security</h6>
                    </div>
                    <div class="bg-light p-20">
                        <div class="d-flex">
                            <div class="align-self-center">
                                <h3 class="m-b-0">July 2017</h3><small>Last Updated</small></div>
                            <div class="ml-auto align-self-center">
                                <h2 class="text-success"></h2></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover earning-box">
                                <thead>
                                    <tr>
                                        <th colspan="2">Name</th>
                                        <th>Priority</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="round round-success">P</span></td>
                                        <td>
                                            <h6>Change Password</h6><small class="text-muted">10/12/2017</small></td>
                                        <td><span class="label label-success">Low</span></td>
                                        <td><i data-toggle="modal" data-target="#change-pass" class="ti ti-pencil"> </i></td>
                                    </tr>
                                    <tr class="active">
                                        <td><span class="round round-success">M</span></td>
                                        <td>
                                            <h6>Change Second Password</h6><small class="text-muted">10/12/2017</small></td>
                                        <td><span class="label label-info">Medium</span></td>
                                        <td><i data-toggle="modal" data-target="#change-pass-two" class="ti ti-pencil"> </i></td>
                                    </tr>
                                    <tr>
                                        <td><span class="round round-success">M</span></td>
                                        <td>
                                            <h6>Manage 2 Step Authentication</h6><small class="text-muted">Disabled</small></td>
                                        <td><span class="label label-primary">High</span></td>
                                        <td><i data-toggle="modal" data-target="#two-step" class="fa fa-qrcode"> </i></td>
                                    </tr>
                                    <tr>
                                        <td><span class="round round-success">M</span></td>
                                        <td>
                                            <h6>Manage Device</h6><small class="text-muted">10/12/2017</small></td>
                                        <td><span class="label label-danger">Low</span></td>
                                        <td><i class="ti ti-pencil"> </i></td>
                                    </tr>
                                    <tr>
                                        <td><span class="round round-success">M</span></td>
                                        <td>
                                            <h6>Authenticate Mobile APP</h6><small class="text-muted">10/12/2017</small></td>
                                        <td><span class="label label-warning">High</span></td>
                                        <td><i class="ti ti-pencil"> </i></td>
                                    </tr>
                                    <tr>
                                        <td><span class="round round-success">M</span></td>
                                        <td>
                                            <h6>Manage Security Questions</h6><small class="text-muted">10/12/2017</small></td>
                                        <td><span class="label label-info">High</span></td>
                                        <td><i class="ti ti-pencil"> </i></td>
                                    </tr>
                                    <tr>
                                        <td><span class="round round-success">M</span></td>
                                        <td>
                                            <h6>Last Login </h6><small class="text-muted">10/12/2017</small></td>
                                        <td><span class="label label-warning">High</span></td>
                                        <td><i class="ti ti-eye"> </i></td>
                                    </tr>
                                    <tr>
                                        <td><span class="round round-success">M</span></td>
                                        <td>
                                            <h6>API Key</h6><small class="text-muted">Enable</small></td>
                                        <td><span class="label label-warning">High</span></td>
                                        <td><i class="ti ti-eye"> </i></td>
                                    </tr>
                                    <tr>
                                        <td><span class="round round-success">M</span></td>
                                        <td>
                                            <h6>Secret Key</h6><small class="text-muted">View Now</small></td>
                                        <td><span class="label label-warning">High</span></td>
                                        <td><i class="ti ti-eye"> </i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <!-- Column -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Notice Board</h4>
                        <h6 class="card-subtitle">Latest Notices and Updates</h6> </div>
                    <!-- ============================================================== -->
                    <!-- Comment widgets -->
                    <!-- ============================================================== -->
                    <div class="comment-widgets m-b-20">
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                            <div class="comment-text w-100">
                                <h5>{{ auth('web')->user()->company_name }} Community</h5>
                                <div class="comment-footer">
                                    <span class="date">February 12, 2018</span>
                                    <span class="label label-info">Coming Soon</span> <span class="action-icons">
                                            <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                            <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle"></i></a>
                                            <a href="javascript:void(0)"><i class="mdi mdi-heart"></i></a>    
                                        </span>
                                </div>
                                <p class="m-b-5 m-t-10">A new Affiliate System Coming in {{ auth('web')->user()->company_name }} ICO Launching Soon.</p>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row ">
                            <div class="comment-text active w-100">
                                <h5>{{  auth('web')->user()->company_name }} Developer Team</h5>
                                <div class="comment-footer">
                                    <span class="date">February 12, 2018</span>
                                    <span class="label label-success">New Feature</span> <span class="action-icons active">
                                            <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                            <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle text-success"></i></a>
                                            <a href="javascript:void(0)"><i class="mdi mdi-heart text-danger"></i></a>    
                                        </span>
                                </div>
                                <p class="m-b-5 m-t-10">Support ticket now inside of {{  auth('web')->user()->company_name }} Wallet keep in touch with us.</p>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                            <div class="comment-text w-100">
                                <h5>{{  auth('web')->user()->company_name }} Developer Team</h5>
                                <div class="comment-footer">
                                    <span class="date">February 02, 2018</span>
                                    <span class="label label-danger">New Feature</span> <span class="action-icons">
                                            <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                            <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle"></i></a>
                                            <a href="javascript:void(0)"><i class="mdi mdi-heart"></i></a>    
                                        </span>
                                </div>
                                <p class="m-b-5 m-t-10">{{  auth('web')->user()->company_name }} Mobile Wallet Coming Soon. Do all your transaction from your smartphone {{  auth('web')->user()->company_name }} Wallet for Android and IOS coming soon.</p>
                            </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                            <div class="comment-text w-100">
                                <h5>James Anderson</h5>
                                <div class="comment-footer">
                                    <span class="date">April 14, 2016</span>
                                    <span class="label label-info">Pending</span> <span class="action-icons">
                                            <a href="javascript:void(0)"><i class="mdi mdi-pencil-circle"></i></a>
                                            <a href="javascript:void(0)"><i class="mdi mdi-checkbox-marked-circle"></i></a>
                                            <a href="javascript:void(0)"><i class="mdi mdi-heart"></i></a>    
                                        </span>
                                </div>
                                <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>
        
        <!--Modal Change Password Start-->
        <div id="change-pass" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" id="cpHolder" data-anim="jello">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Change Password</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <form id="changePasswordFrom" action="" method="post">
                            <@csrf
                            <input type="hidden" name="op" value="changePassword">
                            <div class="form-group">
                                <div class="input-group">
                                <input name="old_password" type="password" class="form-control" placeholder="Type Old Password">
                                <div class="input-group-addon"><i class="mdi mdi-lock"></i></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <input name="new_password" type="password" class="form-control" placeholder="Type New Password">
                                <div class="input-group-addon"><i class="ti-key"></i></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <input name="cpassword" type="password" class="form-control" placeholder="Re-Type Password">
                                <div class="input-group-addon"><i class="ti-key"></i></div>
                                </div>
                            </div>
        
                            <div style="background-color:#f1f1f1; border-left:5px solid #1976d2; padding:15px;">
        
                                <table data-brackets-id='56505' class="table">
                                  Use a secured password.
                                </table> 
                            </div>
        
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button id="changePasswordBtn" class="btn btn-danger waves-effect waves-light" type="button"  onclick="_run(this)" data-form="changePasswordFrom" data-status="false" data-loading="<i class='fa fa-refresh fa-spin fa-1x fa-fw'></i>" data-validator="true" data-callback="false" data-notify="1" data-animation="cpHolder" data-btnid="changePasswordBtn">Submit</button>
                    </div>
                </div>
            </div>
        </div> 
        
        
        <!--Modal Google Authenticator Start-->
         <!-- Modal -->
          <div class="modal fade" id="two-step" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">2 Step Authenticator</h4>
                </div>
                <div class="modal-body">
                  <form id="secForm" action="" method="post">
                    @csrf
                    <input type="hidden" name="op" value="save_two_fa">
               
                    <div class="form-group">
                        <label class="auth-switch">
                            <input type="radio" class="lcs_check lcs_tt2" name="switch" value="1" >
                            
                            <span></span>
                            No editional check require
                        </label>
                    </div>
        
                    <div class="form-group">
                        <label class="auth-switch">
                            <input type="radio" class="lcs_check lcs_tt2" name="switch" value="2">
                            <span></span>
                            Auto Email Authentication
                        </label>
                    </div>
        
                    <div class="form-group">
                        <label class="auth-switch">
                            <input type="radio" class="lcs_check lcs_tt2" name="switch" value="3" >
                            <span></span>
                            Google 2Step Authentication
                        </label>
                    </div>
                    
                    <section class="panel-dark" id="gauth" style="display: none;">
                        <header class="panel-heading">
        
                            <h2 class="panel-title">GOOGLE ATHENTICATOR</h2>
        
                        </header>
                        <div class="panel-body" id="bg">
        
                            <ul class="row" id="step">
                                <li class="col-sm-12"><span class="staper">1</span>
                                    <div class="col-sm-4">
                                        <h4>Download 2 FA backup key:</h3>
                                    </div>
                                    <div class="col-sm-8">  
                                                                             
                                        <input class="key_in" name="secret" type="text" value="">
                                        <a class="dicon" href=""><img class="img_icon" src="{{ asset('images/download.png') }}" /></a>
                                    </div>
                                    <br/>
                                    <br/><br/>
                                </li>
        
                                <li class="col-sm-12"><span class="staper">2</span>
        
                                    <div class="col-sm-4">
                                        <h4>Download and Install:</h4>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="dapp">
                                            <a href="https://itunes.apple.com/us/app/google-authenticator/id388497605?mt=8" target="_blank"><img src="{{ asset('images/iphone.png') }}" /></a>
        
                                            <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en" target="_blank"><img src="{{ asset('images/android.png') }}" /></a>
                                        </div>
                                    </div>
                                    <div class="clr"></div>
                                </li>
        
                                <li class="col-sm-12"><span class="staper">3</span>
                                    <h4>Scan QR:</h4>
                                    <div id="qrcode">
                                        <img src='' />
                                    </div>
                                    <div class="code_in">
                                        <h4>Enter 2FA code form the app:</h4>
                                        <div class="input-group mb-md">
                                            
                                            <span class="input-group-addon">
                                                <i class="fa fa-android" aria-hidden="true"></i>
                                            </span>
                                            <input class="form-control" type="text" name="code">fdf
                                            <span class="input-group-addon ">
                                                <i class="fa fa-apple" aria-hidden="true"></i>
                                            </span>
                                                    
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button id="fabtn" class="btn btn-danger waves-effect waves-light" type="button"  onclick="_run(this)" data-form="secForm" data-status="false" data-loading="<i class='fa fa-refresh fa-spin fa-1x fa-fw'></i>" data-validator="true" data-callback="false" data-notify="2" data-btnid="fabtn">Save Change</button>
                </div>
              </div>
            </div>
          </div>
        <!--Modal Google Authenticator End-->
    <!-- [ content ] End -->
@endsection

