<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link href="/public/assets/css/stylesheet.css" rel="stylesheet">
</head>


<style>@font-face {
  font-family: octicons-anchor;
  src: url(data:font/woff;charset=utf-8;base64,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) format('woff');
}

* {
    box-sizing: border-box;
}



pre {
    font: 12px Consolas, "Liberation Mono", Menlo, Courier, monospace;
}

.markdown-body {
  -webkit-text-size-adjust: 100%;
  text-size-adjust: 100%;
  color: #333;
  font-family: "Helvetica Neue", Helvetica, "Segoe UI", Arial, freesans, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-size: 16px;
  line-height: 1.6;
  word-wrap: break-word;
}

.markdown-body a {
  background-color: transparent;
}

.markdown-body a:active,
.markdown-body a:hover {
  outline: 0;
}

.markdown-body strong {
  font-weight: bold;
}

.markdown-body h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

.markdown-body img {
  border: 0;
}

.markdown-body hr {
  box-sizing: content-box;
  height: 0;
}

.markdown-body pre {
  overflow: auto;
}

.markdown-body code,
.markdown-body kbd,
.markdown-body pre {
  font-family: monospace, monospace;
  font-size: 1em;
}

.markdown-body input {
  color: inherit;
  font: inherit;
  margin: 0;
}

.markdown-body html input[disabled] {
  cursor: default;
}

.markdown-body input {
  line-height: normal;
}

.markdown-body input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}

.markdown-body table {
  border-collapse: collapse;
  border-spacing: 0;
}

.markdown-body td,
.markdown-body th {
  padding: 0;
}

.markdown-body input {
  font: 13px / 1.4 Helvetica, arial, nimbussansl, liberationsans, freesans, clean, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

.markdown-body a {
  color: #4078c0;
  text-decoration: none;
}

.markdown-body a:hover,
.markdown-body a:active {
  text-decoration: underline;
}

.markdown-body hr {
  height: 0;
  margin: 15px 0;
  overflow: hidden;
  background: transparent;
  border: 0;
  border-bottom: 1px solid #ddd;
}

.markdown-body hr:before {
  display: table;
  content: "";
}

.markdown-body hr:after {
  display: table;
  clear: both;
  content: "";
}

.markdown-body h1,
.markdown-body h2,
.markdown-body h3,
.markdown-body h4,
.markdown-body h5,
.markdown-body h6 {
  margin-top: 15px;
  margin-bottom: 15px;
  line-height: 1.1;
}

.markdown-body h1 {
  font-size: 30px;
}

.markdown-body h2 {
  font-size: 21px;
}

.markdown-body h3 {
  font-size: 16px;
}

.markdown-body h4 {
  font-size: 14px;
}

.markdown-body h5 {
  font-size: 12px;
}

.markdown-body h6 {
  font-size: 11px;
}

.markdown-body blockquote {
  margin: 0;
}

.markdown-body ul,
.markdown-body ol {
  padding: 0;
  margin-top: 0;
  margin-bottom: 0;
}

.markdown-body ol ol,
.markdown-body ul ol {
  list-style-type: lower-roman;
}

.markdown-body ul ul ol,
.markdown-body ul ol ol,
.markdown-body ol ul ol,
.markdown-body ol ol ol {
  list-style-type: lower-alpha;
}

.markdown-body dd {
  margin-left: 0;
}

.markdown-body code {
  font-family: Consolas, "Liberation Mono", Menlo, Courier, monospace;
  font-size: 12px;
}

.markdown-body pre {
  margin-top: 0;
  margin-bottom: 0;
  font: 12px Consolas, "Liberation Mono", Menlo, Courier, monospace;
}

.markdown-body .select::-ms-expand {
  opacity: 0;
}

.markdown-body .octicon {
  font: normal normal normal 16px/1 octicons-anchor;
  display: inline-block;
  text-decoration: none;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.markdown-body .octicon-link:before {
  content: '\f05c';
}

.markdown-body:before {
  display: table;
  content: "";
}

.markdown-body:after {
  display: table;
  clear: both;
  content: "";
}

.markdown-body>*:first-child {
  margin-top: 0 !important;
}

.markdown-body>*:last-child {
  margin-bottom: 0 !important;
}

.markdown-body a:not([href]) {
  color: inherit;
  text-decoration: none;
}

.markdown-body .anchor {
  display: inline-block;
  padding-right: 2px;
  margin-left: -18px;
}

.markdown-body .anchor:focus {
  outline: none;
}

.markdown-body h1,
.markdown-body h2,
.markdown-body h3,
.markdown-body h4,
.markdown-body h5,
.markdown-body h6 {
  margin-top: 1em;
  margin-bottom: 16px;
  font-weight: bold;
  line-height: 1.4;
}

.markdown-body h1 .octicon-link,
.markdown-body h2 .octicon-link,
.markdown-body h3 .octicon-link,
.markdown-body h4 .octicon-link,
.markdown-body h5 .octicon-link,
.markdown-body h6 .octicon-link {
  color: #000;
  vertical-align: middle;
  visibility: hidden;
}

.markdown-body h1:hover .anchor,
.markdown-body h2:hover .anchor,
.markdown-body h3:hover .anchor,
.markdown-body h4:hover .anchor,
.markdown-body h5:hover .anchor,
.markdown-body h6:hover .anchor {
  text-decoration: none;
}

.markdown-body h1:hover .anchor .octicon-link,
.markdown-body h2:hover .anchor .octicon-link,
.markdown-body h3:hover .anchor .octicon-link,
.markdown-body h4:hover .anchor .octicon-link,
.markdown-body h5:hover .anchor .octicon-link,
.markdown-body h6:hover .anchor .octicon-link {
  visibility: visible;
}

.markdown-body h1 {
  padding-bottom: 0.3em;
  font-size: 2.25em;
  line-height: 1.2;
  border-bottom: 1px solid #eee;
}

.markdown-body h1 .anchor {
  line-height: 1;
}

.markdown-body h2 {
  padding-bottom: 0.3em;
  font-size: 1.75em;
  line-height: 1.225;
  border-bottom: 1px solid #eee;
}

.markdown-body h2 .anchor {
  line-height: 1;
}

.markdown-body h3 {
  font-size: 1.5em;
  line-height: 1.43;
}

.markdown-body h3 .anchor {
  line-height: 1.2;
}

.markdown-body h4 {
  font-size: 1.25em;
}

.markdown-body h4 .anchor {
  line-height: 1.2;
}

.markdown-body h5 {
  font-size: 1em;
}

.markdown-body h5 .anchor {
  line-height: 1.1;
}

.markdown-body h6 {
  font-size: 1em;
  color: #777;
}

.markdown-body h6 .anchor {
  line-height: 1.1;
}

.markdown-body p,
.markdown-body blockquote,
.markdown-body ul,
.markdown-body ol,
.markdown-body dl,
.markdown-body table,
.markdown-body pre {
  margin-top: 0;
  margin-bottom: 16px;
}

.markdown-body hr {
  height: 4px;
  padding: 0;
  margin: 16px 0;
  background-color: #e7e7e7;
  border: 0 none;
}

.markdown-body ul,
.markdown-body ol {
  padding-left: 2em;
}

.markdown-body ul ul,
.markdown-body ul ol,
.markdown-body ol ol,
.markdown-body ol ul {
  margin-top: 0;
  margin-bottom: 0;
}
.markdown-body li>p {
  margin-top: 16px;
}

.markdown-body dl {
  padding: 0;
}

.markdown-body dl dt {
  padding: 0;
  margin-top: 16px;
  font-size: 1em;
  font-style: italic;
  font-weight: bold;
}

.markdown-body dl dd {
  padding: 0 16px;
  margin-bottom: 16px;
}

.markdown-body blockquote {
  padding: 0 15px;
  color: #777;
  border-left: 4px solid #ddd;
}

.markdown-body blockquote>:first-child {
  margin-top: 0;
}

.markdown-body blockquote>:last-child {
  margin-bottom: 0;
}

.markdown-body table {
  display: block;
  width: 100%;
  overflow: auto;
  word-break: normal;
  word-break: keep-all;
}

.markdown-body table th {
  font-weight: bold;
}

.markdown-body table th,
.markdown-body table td {
  padding: 6px 13px;
  border: 1px solid #ddd;
}

.markdown-body table tr {
  background-color: #fff;
  border-top: 1px solid #ccc;
}

.markdown-body table tr:nth-child(2n) {
  background-color: #f8f8f8;
}

.markdown-body img {
  max-width: 100%;
  box-sizing: content-box;
  background-color: #fff;
}

.markdown-body code {
  padding: 0;
  padding-top: 0.2em;
  padding-bottom: 0.2em;
  margin: 0;
  font-size: 85%;
  background-color: rgba(0,0,0,0.04);
  border-radius: 3px;
}

.markdown-body code:before,
.markdown-body code:after {
  letter-spacing: -0.2em;
  content: "\00a0";
}

.markdown-body pre>code {
  padding: 0;
  margin: 0;
  font-size: 100%;
  word-break: normal;
  white-space: pre;
  background: transparent;
  border: 0;
}

.markdown-body .highlight {
  margin-bottom: 16px;
}

.markdown-body .highlight pre,
.markdown-body pre {
  padding: 16px;
  overflow: auto;
  font-size: 85%;
  line-height: 1.45;
  background-color: #f7f7f7;
  border-radius: 3px;
}

.markdown-body .highlight pre {
  margin-bottom: 0;
  word-break: normal;
}

.markdown-body pre {
  word-wrap: normal;
}

.markdown-body pre code {
  display: inline;
  max-width: initial;
  padding: 0;
  margin: 0;
  overflow: initial;
  line-height: inherit;
  word-wrap: normal;
  background-color: transparent;
  border: 0;
}

.markdown-body pre code:before,
.markdown-body pre code:after {
  content: normal;
}

.markdown-body kbd {
  display: inline-block;
  padding: 3px 5px;
  font-size: 11px;
  line-height: 10px;
  color: #555;
  vertical-align: middle;
  background-color: #fcfcfc;
  border: solid 1px #ccc;
  border-bottom-color: #bbb;
  border-radius: 3px;
  box-shadow: inset 0 -1px 0 #bbb;
}

.markdown-body .pl-c {
  color: #969896;
}

.markdown-body .pl-c1,
.markdown-body .pl-s .pl-v {
  color: #0086b3;
}

.markdown-body .pl-e,
.markdown-body .pl-en {
  color: #795da3;
}

.markdown-body .pl-s .pl-s1,
.markdown-body .pl-smi {
  color: #333;
}

.markdown-body .pl-ent {
  color: #63a35c;
}

.markdown-body .pl-k {
  color: #a71d5d;
}

.markdown-body .pl-pds,
.markdown-body .pl-s,
.markdown-body .pl-s .pl-pse .pl-s1,
.markdown-body .pl-sr,
.markdown-body .pl-sr .pl-cce,
.markdown-body .pl-sr .pl-sra,
.markdown-body .pl-sr .pl-sre {
  color: #183691;
}

.markdown-body .pl-v {
  color: #ed6a43;
}

.markdown-body .pl-id {
  color: #b52a1d;
}

.markdown-body .pl-ii {
  background-color: #b52a1d;
  color: #f8f8f8;
}

.markdown-body .pl-sr .pl-cce {
  color: #63a35c;
  font-weight: bold;
}

.markdown-body .pl-ml {
  color: #693a17;
}

.markdown-body .pl-mh,
.markdown-body .pl-mh .pl-en,
.markdown-body .pl-ms {
  color: #1d3e81;
  font-weight: bold;
}

.markdown-body .pl-mq {
  color: #008080;
}

.markdown-body .pl-mi {
  color: #333;
  font-style: italic;
}

.markdown-body .pl-mb {
  color: #333;
  font-weight: bold;
}

.markdown-body .pl-md {
  background-color: #ffecec;
  color: #bd2c00;
}

.markdown-body .pl-mi1 {
  background-color: #eaffea;
  color: #55a532;
}

.markdown-body .pl-mdr {
  color: #795da3;
  font-weight: bold;
}

.markdown-body .pl-mo {
  color: #1d3e81;
}

.markdown-body kbd {
  display: inline-block;
  padding: 3px 5px;
  font: 11px Consolas, "Liberation Mono", Menlo, Courier, monospace;
  line-height: 10px;
  color: #555;
  vertical-align: middle;
  background-color: #fcfcfc;
  border: solid 1px #ccc;
  border-bottom-color: #bbb;
  border-radius: 3px;
  box-shadow: inset 0 -1px 0 #bbb;
}

.markdown-body .plan-price-unit {
  color: #767676;
  font-weight: normal;
}

.markdown-body .task-list-item {
  list-style-type: none;
}

.markdown-body .task-list-item+.task-list-item {
  margin-top: 3px;
}

.markdown-body .task-list-item input {
  margin: 0 0.35em 0.25em -1.6em;
  vertical-align: middle;
}

.markdown-body .plan-choice {
  padding: 15px;
  padding-left: 40px;
  display: block;
  border: 1px solid #e0e0e0;
  position: relative;
  font-weight: normal;
  background-color: #fafafa;
}

.markdown-body .plan-choice.open {
  background-color: #fff;
}

.markdown-body .plan-choice.open .plan-choice-seat-breakdown {
  display: block;
}

.markdown-body .plan-choice-free {
  border-radius: 3px 3px 0 0;
}

.markdown-body .plan-choice-paid {
  border-radius: 0 0 3px 3px;
  border-top: 0;
  margin-bottom: 20px;
}

.markdown-body .plan-choice-radio {
  position: absolute;
  left: 15px;
  top: 18px;
}

.markdown-body .plan-choice-exp {
  color: #999;
  font-size: 12px;
  margin-top: 5px;
}

.markdown-body .plan-choice-seat-breakdown {
  margin-top: 10px;
  display: none;
}

.markdown-body :checked+.radio-label {
  z-index: 1;
  position: relative;
  border-color: #4078c0;
}
</style><script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<script>
MathJax.Hub.Config({
  config: ["MMLorHTML.js"],
  extensions: ["tex2jax.js"],
  jax: ["input/TeX"],
  tex2jax: {
    inlineMath: [ ['$','$'], ["\\(","\\)"] ],
    displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
    processEscapes: false
  },
  TeX: {
    extensions: ["AMSmath.js", "AMSsymbols.js"],
    TagSide: "right",
    TagIndent: ".8em",
    MultLineWidth: "85%",
    equationNumbers: {
      autoNumber: "AMS",
    },
    unicode: {
      fonts: "STIXGeneral,'Arial Unicode MS'"
    }
  },
  showProcessingMessages: false
});
</script>
<script type="text/javascript" charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
<script type="text/javascript" charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js"></script>
<script type="text/javascript" charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/js-sequence-diagrams/1.0.4/sequence-diagram-min.js"></script>
<script type="text/javascript">// flowchart, v1.3.4
// Copyright (c)2014 Adriano Raiano (adrai).
// Distributed under MIT license
// http://adrai.github.io/flowchart.js
!function(){function a(b,c){if(!b||"function"==typeof b)return c;var d={};for(var e in c)d[e]=c[e];for(e in b)b[e]&&(d[e]="object"==typeof d[e]?a(d[e],b[e]):b[e]);return d}function b(a,b){if("function"==typeof Object.create)a.super_=b,a.prototype=Object.create(b.prototype,{constructor:{value:a,enumerable:!1,writable:!0,configurable:!0}});else{a.super_=b;var c=function(){};c.prototype=b.prototype,a.prototype=new c,a.prototype.constructor=a}}function c(a,b,c){var d,e,f="M{0},{1}";for(d=2,e=2*c.length+2;e>d;d+=2)f+=" L{"+d+"},{"+(d+1)+"}";var g=[b.x,b.y];for(d=0,e=c.length;e>d;d++)g.push(c[d].x),g.push(c[d].y);var h=a.paper.path(f,g);h.attr("stroke",a.options["element-color"]),h.attr("stroke-width",a.options["line-width"]);var i=a.options.font,j=a.options["font-family"],k=a.options["font-weight"];return i&&h.attr({font:i}),j&&h.attr({"font-family":j}),k&&h.attr({"font-weight":k}),h}function d(a,b,c,d){var e,f;"[object Array]"!==Object.prototype.toString.call(c)&&(c=[c]);var g="M{0},{1}";for(e=2,f=2*c.length+2;f>e;e+=2)g+=" L{"+e+"},{"+(e+1)+"}";var h=[b.x,b.y];for(e=0,f=c.length;f>e;e++)h.push(c[e].x),h.push(c[e].y);var i=a.paper.path(g,h);i.attr({stroke:a.options["line-color"],"stroke-width":a.options["line-width"],"arrow-end":a.options["arrow-end"]});var j=a.options.font,k=a.options["font-family"],l=a.options["font-weight"];if(j&&i.attr({font:j}),k&&i.attr({"font-family":k}),l&&i.attr({"font-weight":l}),d){var m=!1,n=a.paper.text(0,0,d),o=!1,p=c[0];b.y===p.y&&(o=!0);var q=0,r=0;m?(q=b.x>p.x?b.x-(b.x-p.x)/2:p.x-(p.x-b.x)/2,r=b.y>p.y?b.y-(b.y-p.y)/2:p.y-(p.y-b.y)/2,o?(q-=n.getBBox().width/2,r-=a.options["text-margin"]):(q+=a.options["text-margin"],r-=n.getBBox().height/2)):(q=b.x,r=b.y,o?(q+=a.options["text-margin"]/2,r-=a.options["text-margin"]):(q+=a.options["text-margin"]/2,r+=a.options["text-margin"])),n.attr({"text-anchor":"start","font-size":a.options["font-size"],fill:a.options["font-color"],x:q,y:r}),j&&n.attr({font:j}),k&&n.attr({"font-family":k}),l&&n.attr({"font-weight":l})}return i}function e(a,b,c,d,e,f,g,h){var i,j,k,l,m,n={x:null,y:null,onLine1:!1,onLine2:!1};return i=(h-f)*(c-a)-(g-e)*(d-b),0===i?n:(j=b-f,k=a-e,l=(g-e)*j-(h-f)*k,m=(c-a)*j-(d-b)*k,j=l/i,k=m/i,n.x=a+j*(c-a),n.y=b+j*(d-b),j>0&&1>j&&(n.onLine1=!0),k>0&&1>k&&(n.onLine2=!0),n)}function f(a,b){b=b||{},this.paper=new Raphael(a),this.options=r.defaults(b,q),this.symbols=[],this.lines=[],this.start=null}function g(a,b,c){this.chart=a,this.group=this.chart.paper.set(),this.symbol=c,this.connectedTo=[],this.symbolType=b.symbolType,this.flowstate=b.flowstate||"future",this.next_direction=b.next&&b.direction_next?b.direction_next:void 0,this.text=this.chart.paper.text(0,0,b.text),b.key&&(this.text.node.id=b.key+"t"),this.text.node.setAttribute("class",this.getAttr("class")+"t"),this.text.attr({"text-anchor":"start",x:this.getAttr("text-margin"),fill:this.getAttr("font-color"),"font-size":this.getAttr("font-size")});var d=this.getAttr("font"),e=this.getAttr("font-family"),f=this.getAttr("font-weight");d&&this.text.attr({font:d}),e&&this.text.attr({"font-family":e}),f&&this.text.attr({"font-weight":f}),b.link&&this.text.attr("href",b.link),b.target&&this.text.attr("target",b.target);var g=this.getAttr("maxWidth");if(g){for(var h=b.text.split(" "),i="",j=0,k=h.length;k>j;j++){var l=h[j];this.text.attr("text",i+" "+l),i+=this.text.getBBox().width>g?"\n"+l:" "+l}this.text.attr("text",i.substring(1))}if(this.group.push(this.text),c){var m=this.getAttr("text-margin");c.attr({fill:this.getAttr("fill"),stroke:this.getAttr("element-color"),"stroke-width":this.getAttr("line-width"),width:this.text.getBBox().width+2*m,height:this.text.getBBox().height+2*m}),c.node.setAttribute("class",this.getAttr("class")),b.link&&c.attr("href",b.link),b.target&&c.attr("target",b.target),b.key&&(c.node.id=b.key),this.group.push(c),c.insertBefore(this.text),this.text.attr({y:c.getBBox().height/2}),this.initialize()}}function h(a,b){var c=a.paper.rect(0,0,0,0,20);b=b||{},b.text=b.text||"Start",g.call(this,a,b,c)}function i(a,b){var c=a.paper.rect(0,0,0,0,20);b=b||{},b.text=b.text||"End",g.call(this,a,b,c)}function j(a,b){var c=a.paper.rect(0,0,0,0);b=b||{},g.call(this,a,b,c)}function k(a,b){var c=a.paper.rect(0,0,0,0);b=b||{},g.call(this,a,b,c),c.attr({width:this.text.getBBox().width+4*this.getAttr("text-margin")}),this.text.attr({x:2*this.getAttr("text-margin")});var d=a.paper.rect(0,0,0,0);d.attr({x:this.getAttr("text-margin"),stroke:this.getAttr("element-color"),"stroke-width":this.getAttr("line-width"),width:this.text.getBBox().width+2*this.getAttr("text-margin"),height:this.text.getBBox().height+2*this.getAttr("text-margin"),fill:this.getAttr("fill")}),b.key&&(d.node.id=b.key+"i");var e=this.getAttr("font"),f=this.getAttr("font-family"),h=this.getAttr("font-weight");e&&d.attr({font:e}),f&&d.attr({"font-family":f}),h&&d.attr({"font-weight":h}),b.link&&d.attr("href",b.link),b.target&&d.attr("target",b.target),this.group.push(d),d.insertBefore(this.text),this.initialize()}function l(a,b){b=b||{},g.call(this,a,b),this.textMargin=this.getAttr("text-margin"),this.text.attr({x:3*this.textMargin});var d=this.text.getBBox().width+4*this.textMargin,e=this.text.getBBox().height+2*this.textMargin,f=this.textMargin,h=e/2,i={x:f,y:h},j=[{x:f-this.textMargin,y:e},{x:f-this.textMargin+d,y:e},{x:f-this.textMargin+d+2*this.textMargin,y:0},{x:f-this.textMargin+2*this.textMargin,y:0},{x:f,y:h}],k=c(a,i,j);k.attr({stroke:this.getAttr("element-color"),"stroke-width":this.getAttr("line-width"),fill:this.getAttr("fill")}),b.link&&k.attr("href",b.link),b.target&&k.attr("target",b.target),b.key&&(k.node.id=b.key),k.node.setAttribute("class",this.getAttr("class")),this.text.attr({y:k.getBBox().height/2}),this.group.push(k),k.insertBefore(this.text),this.initialize()}function m(a,b){b=b||{},g.call(this,a,b),this.textMargin=this.getAttr("text-margin"),this.yes_direction="bottom",this.no_direction="right",b.yes&&b.direction_yes&&b.no&&!b.direction_no?"right"===b.direction_yes?(this.no_direction="bottom",this.yes_direction="right"):(this.no_direction="right",this.yes_direction="bottom"):b.yes&&!b.direction_yes&&b.no&&b.direction_no?"right"===b.direction_no?(this.yes_direction="bottom",this.no_direction="right"):(this.yes_direction="right",this.no_direction="bottom"):(this.yes_direction="bottom",this.no_direction="right"),this.yes_direction=this.yes_direction||"bottom",this.no_direction=this.no_direction||"right",this.text.attr({x:2*this.textMargin});var d=this.text.getBBox().width+3*this.textMargin;d+=d/2;var e=this.text.getBBox().height+2*this.textMargin;e+=e/2,e=Math.max(.5*d,e);var f=d/4,h=e/4;this.text.attr({x:f+this.textMargin/2});var i={x:f,y:h},j=[{x:f-d/4,y:h+e/4},{x:f-d/4+d/2,y:h+e/4+e/2},{x:f-d/4+d,y:h+e/4},{x:f-d/4+d/2,y:h+e/4-e/2},{x:f-d/4,y:h+e/4}],k=c(a,i,j);k.attr({stroke:this.getAttr("element-color"),"stroke-width":this.getAttr("line-width"),fill:this.getAttr("fill")}),b.link&&k.attr("href",b.link),b.target&&k.attr("target",b.target),b.key&&(k.node.id=b.key),k.node.setAttribute("class",this.getAttr("class")),this.text.attr({y:k.getBBox().height/2}),this.group.push(k),k.insertBefore(this.text),this.initialize()}function n(a){function b(a){var b=a.indexOf("(")+1,c=a.indexOf(")");return b>=0&&c>=0?d.symbols[a.substring(0,b-1)]:d.symbols[a]}function c(a){var b="next",c=a.indexOf("(")+1,d=a.indexOf(")");return c>=0&&d>=0&&(b=D.substring(c,d),b.indexOf(",")<0&&"yes"!==b&&"no"!==b&&(b="next, "+b)),b}a=a||"",a=a.trim();for(var d={symbols:{},start:null,drawSVG:function(a,b){function c(a){if(g[a.key])return g[a.key];switch(a.symbolType){case"start":g[a.key]=new h(e,a);break;case"end":g[a.key]=new i(e,a);break;case"operation":g[a.key]=new j(e,a);break;case"inputoutput":g[a.key]=new l(e,a);break;case"subroutine":g[a.key]=new k(e,a);break;case"condition":g[a.key]=new m(e,a);break;default:return new Error("Wrong symbol type!")}return g[a.key]}var d=this;this.diagram&&this.diagram.clean();var e=new f(a,b);this.diagram=e;var g={};!function n(a,b,f){var g=c(a);return d.start===a?e.startWith(g):b&&f&&!b.pathOk&&(b instanceof m?(f.yes===a&&b.yes(g),f.no===a&&b.no(g)):b.then(g)),g.pathOk?g:(g instanceof m?(a.yes&&n(a.yes,g,a),a.no&&n(a.no,g,a)):a.next&&n(a.next,g,a),g)}(this.start),e.render()},clean:function(){this.diagram.clean()}},e=[],g=0,n=1,o=a.length;o>n;n++)if("\n"===a[n]&&"\\"!==a[n-1]){var p=a.substring(g,n);g=n+1,e.push(p.replace(/\\\n/g,"\n"))}g<a.length&&e.push(a.substr(g));for(var q=1,r=e.length;r>q;){var s=e[q];s.indexOf(": ")<0&&s.indexOf("(")<0&&s.indexOf(")")<0&&s.indexOf("->")<0&&s.indexOf("=>")<0?(e[q-1]+="\n"+s,e.splice(q,1),r--):q++}for(;e.length>0;){var t=e.splice(0,1)[0];if(t.indexOf("=>")>=0){var u,v=t.split("=>"),w={key:v[0],symbolType:v[1],text:null,link:null,target:null,flowstate:null};if(w.symbolType.indexOf(": ")>=0&&(u=w.symbolType.split(": "),w.symbolType=u[0],w.text=u[1]),w.text&&w.text.indexOf(":>")>=0?(u=w.text.split(":>"),w.text=u[0],w.link=u[1]):w.symbolType.indexOf(":>")>=0&&(u=w.symbolType.split(":>"),w.symbolType=u[0],w.link=u[1]),w.symbolType.indexOf("\n")>=0&&(w.symbolType=w.symbolType.split("\n")[0]),w.link){var x=w.link.indexOf("[")+1,y=w.link.indexOf("]");x>=0&&y>=0&&(w.target=w.link.substring(x,y),w.link=w.link.substring(0,x-1))}if(w.text&&w.text.indexOf("|")>=0){var z=w.text.split("|");w.text=z[0],w.flowstate=z[1].trim()}d.symbols[w.key]=w}else if(t.indexOf("->")>=0)for(var A=t.split("->"),B=0,C=A.length;C>B;B++){var D=A[B],E=b(D),F=c(D),G=null;if(F.indexOf(",")>=0){var H=F.split(",");F=H[0],G=H[1].trim()}if(d.start||(d.start=E),C>B+1){var I=A[B+1];E[F]=b(I),E["direction_"+F]=G,G=null}}}return d}Array.prototype.indexOf||(Array.prototype.indexOf=function(a){"use strict";if(null===this)throw new TypeError;var b=Object(this),c=b.length>>>0;if(0===c)return-1;var d=0;if(arguments.length>0&&(d=Number(arguments[1]),d!=d?d=0:0!==d&&1/0!=d&&d!=-1/0&&(d=(d>0||-1)*Math.floor(Math.abs(d)))),d>=c)return-1;for(var e=d>=0?d:Math.max(c-Math.abs(d),0);c>e;e++)if(e in b&&b[e]===a)return e;return-1}),Array.prototype.lastIndexOf||(Array.prototype.lastIndexOf=function(a){"use strict";if(null===this)throw new TypeError;var b=Object(this),c=b.length>>>0;if(0===c)return-1;var d=c;arguments.length>1&&(d=Number(arguments[1]),d!=d?d=0:0!==d&&d!=1/0&&d!=-(1/0)&&(d=(d>0||-1)*Math.floor(Math.abs(d))));for(var e=d>=0?Math.min(d,c-1):c-Math.abs(d);e>=0;e--)if(e in b&&b[e]===a)return e;return-1}),String.prototype.trim||(String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g,"")});var o=this,p={};"undefined"!=typeof module&&module.exports?module.exports=p:o.flowchart=o.flowchart||p;var q={x:0,y:0,"line-width":3,"line-length":50,"text-margin":10,"font-size":14,"font-color":"black","line-color":"black","element-color":"black",fill:"white","yes-text":"yes","no-text":"no","arrow-end":"block","class":"flowchart",symbols:{start:{},end:{},condition:{},inputoutput:{},operation:{},subroutine:{}}},r={defaults:a,inherits:b};f.prototype.handle=function(a){this.symbols.indexOf(a)<=-1&&this.symbols.push(a);var b=this;return a instanceof m?(a.yes=function(c){return a.yes_symbol=c,a.no_symbol&&(a.pathOk=!0),b.handle(c)},a.no=function(c){return a.no_symbol=c,a.yes_symbol&&(a.pathOk=!0),b.handle(c)}):a.then=function(c){return a.next=c,a.pathOk=!0,b.handle(c)},a},f.prototype.startWith=function(a){return this.start=a,this.handle(a)},f.prototype.render=function(){var a,b=0,c=0,d=0,e=0,f=0,g=0;for(d=0,e=this.symbols.length;e>d;d++)a=this.symbols[d],a.width>b&&(b=a.width),a.height>c&&(c=a.height);for(d=0,e=this.symbols.length;e>d;d++)a=this.symbols[d],a.shiftX(this.options.x+(b-a.width)/2+this.options["line-width"]),a.shiftY(this.options.y+(c-a.height)/2+this.options["line-width"]);for(this.start.render(),d=0,e=this.symbols.length;e>d;d++)a=this.symbols[d],a.renderLines();for(f=this.maxXFromLine,d=0,e=this.symbols.length;e>d;d++){a=this.symbols[d];var h=a.getX()+a.width,i=a.getY()+a.height;h>f&&(f=h),i>g&&(g=i)}this.paper.setSize(f+this.options["line-width"],g+this.options["line-width"])},f.prototype.clean=function(){if(this.paper){var a=this.paper.canvas;a.parentNode.removeChild(a)}},g.prototype.getAttr=function(a){if(!this.chart)return void 0;var b,c=this.chart.options?this.chart.options[a]:void 0,d=this.chart.options.symbols?this.chart.options.symbols[this.symbolType][a]:void 0;return this.chart.options.flowstate&&this.chart.options.flowstate[this.flowstate]&&(b=this.chart.options.flowstate[this.flowstate][a]),b||d||c},g.prototype.initialize=function(){this.group.transform("t"+this.getAttr("line-width")+","+this.getAttr("line-width")),this.width=this.group.getBBox().width,this.height=this.group.getBBox().height},g.prototype.getCenter=function(){return{x:this.getX()+this.width/2,y:this.getY()+this.height/2}},g.prototype.getX=function(){return this.group.getBBox().x},g.prototype.getY=function(){return this.group.getBBox().y},g.prototype.shiftX=function(a){this.group.transform("t"+(this.getX()+a)+","+this.getY())},g.prototype.setX=function(a){this.group.transform("t"+a+","+this.getY())},g.prototype.shiftY=function(a){this.group.transform("t"+this.getX()+","+(this.getY()+a))},g.prototype.setY=function(a){this.group.transform("t"+this.getX()+","+a)},g.prototype.getTop=function(){var a=this.getY(),b=this.getX()+this.width/2;return{x:b,y:a}},g.prototype.getBottom=function(){var a=this.getY()+this.height,b=this.getX()+this.width/2;return{x:b,y:a}},g.prototype.getLeft=function(){var a=this.getY()+this.group.getBBox().height/2,b=this.getX();return{x:b,y:a}},g.prototype.getRight=function(){var a=this.getY()+this.group.getBBox().height/2,b=this.getX()+this.group.getBBox().width;return{x:b,y:a}},g.prototype.render=function(){if(this.next){var a=this.getAttr("line-length");if("right"===this.next_direction){var b=this.getRight();if(this.next.getLeft(),!this.next.isPositioned){this.next.setY(b.y-this.next.height/2),this.next.shiftX(this.group.getBBox().x+this.width+a);var c=this;!function e(){for(var b,d=!1,f=0,g=c.chart.symbols.length;g>f;f++){b=c.chart.symbols[f];var h=Math.abs(b.getCenter().x-c.next.getCenter().x);if(b.getCenter().y>c.next.getCenter().y&&h<=c.next.width/2){d=!0;break}}d&&(c.next.setX(b.getX()+b.width+a),e())}(),this.next.isPositioned=!0,this.next.render()}}else{var d=this.getBottom();this.next.getTop(),this.next.isPositioned||(this.next.shiftY(this.getY()+this.height+a),this.next.setX(d.x-this.next.width/2),this.next.isPositioned=!0,this.next.render())}}},g.prototype.renderLines=function(){this.next&&(this.next_direction?this.drawLineTo(this.next,"",this.next_direction):this.drawLineTo(this.next))},g.prototype.drawLineTo=function(a,b,c){this.connectedTo.indexOf(a)<0&&this.connectedTo.push(a);var f,g=this.getCenter().x,h=this.getCenter().y,i=(this.getTop(),this.getRight()),j=this.getBottom(),k=this.getLeft(),l=a.getCenter().x,m=a.getCenter().y,n=a.getTop(),o=a.getRight(),p=(a.getBottom(),a.getLeft()),q=g===l,r=h===m,s=m>h,t=h>m,u=g>l,v=l>g,w=0,x=this.getAttr("line-length"),y=this.getAttr("line-width");if(c&&"bottom"!==c||!q||!s)if(c&&"right"!==c||!r||!v)if(c&&"left"!==c||!r||!u)if(c&&"right"!==c||!q||!t)if(c&&"right"!==c||!q||!s)if(c&&"bottom"!==c||!u)if(c&&"bottom"!==c||!v)if(c&&"right"===c&&u)f=d(this.chart,i,[{x:i.x+x/2,y:i.y},{x:i.x+x/2,y:n.y-x/2},{x:n.x,y:n.y-x/2},{x:n.x,y:n.y}],b),this.rightStart=!0,a.topEnd=!0,w=i.x+x/2;else if(c&&"right"===c&&v)f=d(this.chart,i,[{x:n.x,y:i.y},{x:n.x,y:n.y}],b),this.rightStart=!0,a.topEnd=!0,w=i.x+x/2;else if(c&&"bottom"===c&&q&&t)f=d(this.chart,j,[{x:j.x,y:j.y+x/2},{x:i.x+x/2,y:j.y+x/2},{x:i.x+x/2,y:n.y-x/2},{x:n.x,y:n.y-x/2},{x:n.x,y:n.y}],b),this.bottomStart=!0,a.topEnd=!0,w=j.x+x/2;else if("left"===c&&q&&t){var z=k.x-x/2;p.x<k.x&&(z=p.x-x/2),f=d(this.chart,k,[{x:z,y:k.y},{x:z,y:n.y-x/2},{x:n.x,y:n.y-x/2},{x:n.x,y:n.y}],b),this.leftStart=!0,a.topEnd=!0,w=k.x}else"left"===c&&(f=d(this.chart,k,[{x:n.x+(k.x-n.x)/2,y:k.y},{x:n.x+(k.x-n.x)/2,y:n.y-x/2},{x:n.x,y:n.y-x/2},{x:n.x,y:n.y}],b),this.leftStart=!0,a.topEnd=!0,w=k.x);else f=d(this.chart,j,[{x:j.x,y:j.y+x/2},{x:j.x+(j.x-n.x)/2,y:j.y+x/2},{x:j.x+(j.x-n.x)/2,y:n.y-x/2},{x:n.x,y:n.y-x/2},{x:n.x,y:n.y}],b),this.bottomStart=!0,a.topEnd=!0,w=j.x+(j.x-n.x)/2;else f=this.leftEnd&&t?d(this.chart,j,[{x:j.x,y:j.y+x/2},{x:j.x+(j.x-n.x)/2,y:j.y+x/2},{x:j.x+(j.x-n.x)/2,y:n.y-x/2},{x:n.x,y:n.y-x/2},{x:n.x,y:n.y}],b):d(this.chart,j,[{x:j.x,y:n.y-x/2},{x:n.x,y:n.y-x/2},{x:n.x,y:n.y}],b),this.bottomStart=!0,a.topEnd=!0,w=j.x+(j.x-n.x)/2;else f=d(this.chart,i,[{x:i.x+x/2,y:i.y},{x:i.x+x/2,y:n.y-x/2},{x:n.x,y:n.y-x/2},{x:n.x,y:n.y}],b),this.rightStart=!0,a.topEnd=!0,w=i.x+x/2;else f=d(this.chart,i,[{x:i.x+x/2,y:i.y},{x:i.x+x/2,y:n.y-x/2},{x:n.x,y:n.y-x/2},{x:n.x,y:n.y}],b),this.rightStart=!0,a.topEnd=!0,w=i.x+x/2;else f=d(this.chart,k,o,b),this.leftStart=!0,a.rightEnd=!0,w=o.x;else f=d(this.chart,i,p,b),this.rightStart=!0,a.leftEnd=!0,w=p.x;else f=d(this.chart,j,n,b),this.bottomStart=!0,a.topEnd=!0,w=j.x;if(f){for(var A=0,B=this.chart.lines.length;B>A;A++)for(var C,D=this.chart.lines[A],E=D.attr("path"),F=f.attr("path"),G=0,H=E.length-1;H>G;G++){var I=[];I.push(["M",E[G][1],E[G][2]]),I.push(["L",E[G+1][1],E[G+1][2]]);for(var J=I[0][1],K=I[0][2],L=I[1][1],M=I[1][2],N=0,O=F.length-1;O>N;N++){var P=[];P.push(["M",F[N][1],F[N][2]]),P.push(["L",F[N+1][1],F[N+1][2]]);var Q=P[0][1],R=P[0][2],S=P[1][1],T=P[1][2],U=e(J,K,L,M,Q,R,S,T);if(U.onLine1&&U.onLine2){var V;R===T?Q>S?(V=["L",U.x+2*y,R],F.splice(N+1,0,V),V=["C",U.x+2*y,R,U.x,R-4*y,U.x-2*y,R],F.splice(N+2,0,V),f.attr("path",F)):(V=["L",U.x-2*y,R],F.splice(N+1,0,V),V=["C",U.x-2*y,R,U.x,R-4*y,U.x+2*y,R],F.splice(N+2,0,V),f.attr("path",F)):R>T?(V=["L",Q,U.y+2*y],F.splice(N+1,0,V),V=["C",Q,U.y+2*y,Q+4*y,U.y,Q,U.y-2*y],F.splice(N+2,0,V),f.attr("path",F)):(V=["L",Q,U.y-2*y],F.splice(N+1,0,V),V=["C",Q,U.y-2*y,Q+4*y,U.y,Q,U.y+2*y],F.splice(N+2,0,V),f.attr("path",F)),N+=2,C+=2}}}this.chart.lines.push(f)}(!this.chart.maxXFromLine||this.chart.maxXFromLine&&w>this.chart.maxXFromLine)&&(this.chart.maxXFromLine=w)},r.inherits(h,g),r.inherits(i,g),r.inherits(j,g),r.inherits(k,g),r.inherits(l,g),l.prototype.getLeft=function(){var a=this.getY()+this.group.getBBox().height/2,b=this.getX()+this.textMargin;return{x:b,y:a}},l.prototype.getRight=function(){var a=this.getY()+this.group.getBBox().height/2,b=this.getX()+this.group.getBBox().width-this.textMargin;return{x:b,y:a}},r.inherits(m,g),m.prototype.render=function(){this.yes_direction&&(this[this.yes_direction+"_symbol"]=this.yes_symbol),this.no_direction&&(this[this.no_direction+"_symbol"]=this.no_symbol);var a=this.getAttr("line-length");if(this.bottom_symbol){var b=this.getBottom();this.bottom_symbol.getTop(),this.bottom_symbol.isPositioned||(this.bottom_symbol.shiftY(this.getY()+this.height+a),this.bottom_symbol.setX(b.x-this.bottom_symbol.width/2),this.bottom_symbol.isPositioned=!0,this.bottom_symbol.render())}if(this.right_symbol){var c=this.getRight();if(this.right_symbol.getLeft(),!this.right_symbol.isPositioned){this.right_symbol.setY(c.y-this.right_symbol.height/2),this.right_symbol.shiftX(this.group.getBBox().x+this.width+a);var d=this;!function e(){for(var b,c=!1,f=0,g=d.chart.symbols.length;g>f;f++){b=d.chart.symbols[f];var h=Math.abs(b.getCenter().x-d.right_symbol.getCenter().x);if(b.getCenter().y>d.right_symbol.getCenter().y&&h<=d.right_symbol.width/2){c=!0;break}}c&&(d.right_symbol.setX(b.getX()+b.width+a),e())}(),this.right_symbol.isPositioned=!0,this.right_symbol.render()}}},m.prototype.renderLines=function(){this.yes_symbol&&this.drawLineTo(this.yes_symbol,this.getAttr("yes-text"),this.yes_direction),this.no_symbol&&this.drawLineTo(this.no_symbol,this.getAttr("no-text"),this.no_direction)},p.parse=n}();
</script>
<script type="text/javascript">
(function (win, doc) {
  function onReady(fn) {
    if (doc.addEventListener) {
      doc.addEventListener('DOMContentLoaded', fn);
    } else {
      doc.attachEvent('onreadystatechange', function() {
        if (doc.readyState === 'interactive')
          fn();
      });
    }
  }

  win.convertUML = function(className, converter, settings) {
    var charts = doc.querySelectorAll("pre." + className),
        arr = [],
        i, j, maxItem, diagaram, text, curNode;

    // Is there a settings object?
    if (settings === void 0) {
        settings = {};
    }

    // Make sure we are dealing with an array
    for(i = 0, maxItem = charts.length; i < maxItem; i++) arr.push(charts[i])

    // Find the UML source element and get the text
    for (i = 0, maxItem = arr.length; i < maxItem; i++) {
        childEl = arr[i].firstChild;
        parentEl = childEl.parentNode;
        text = "";
        for (j = 0; j < childEl.childNodes.length; j++) {
            curNode = childEl.childNodes[j];
            whitespace = /^\s*$/;
            if (curNode.nodeName === "#text" && !(whitespace.test(curNode.nodeValue))) {
                text = curNode.nodeValue;
                break;
            }
        }

        // Do UML conversion and replace source
        el = doc.createElement('div');
        el.className = className;
        parentEl.parentNode.insertBefore(el, parentEl);
        parentEl.parentNode.removeChild(parentEl);
        diagram = converter.parse(text);
        diagram.drawSVG(el, settings);
    }
  }

  onReady(function(){convertUML('uml-flowchart', flowchart);});
  onReady(function(){convertUML('uml-sequence-diagram', Diagram, {theme: 'simple'});});
})(window, document)
</script>
<title>faq_m</title></head>


<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><span style="background-image: url('/public/assets/images/clogo_64.png');background-size:100%;height: 32px;width: 32px;display: inline-block;left: 6px;top:6px;position: absolute;"></span><span style="position: relative;left: 32px;"><?php echo $heading;?></span></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-gear fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/faq"><i class="fa fa-question fa-fw"></i> 帮助</a>
                        </li>
                        <li><a href="/setting"><i class="fa fa-gear fa-fw"></i> 设置</a>
                        </li>
                    </ul>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> 登出</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav in" id="side-menu">
                        <li>
                            <a id="teachermanage" href="/teachermanage"><i class="fa fa-group fa-fw"></i> 教师信息管理</a>
                        </li>
                        <li>
                            <a id="exammanage" href="/exammanage"><i class="fa fa-table fa-fw"></i> 考试信息管理</a>
                        </li>
                        <li>
                            <a id="distribute" href="/distribute"><i class="fa fa-exchange fa-fw"></i> 考试分配</a>
                        </li>
                        <li>
                            <a id="all" href="/all"><i class="fa fa-dashboard fa-fw"></i> 教师监考统计</a>
                        </li>
                        <li>
                            <a id="pushmanage" href="/pushmanage"><i class="fa fa-dashboard fa-fw"></i> 短信推送管理</a>
                        </li>
                    </ul>                                                
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

<article id="page-wrapper" style="min-height: 368px;" class="markdown-body">
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">管理端说明文档</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
<h2 id="%E8%80%83%E8%AF%95%E4%BF%A1%E6%81%AF%E7%AE%A1%E7%90%86%E6%A8%A1%E5%9D%97">
<a id="user-content-考试信息管理模块" class="anchor" href="#%E8%80%83%E8%AF%95%E4%BF%A1%E6%81%AF%E7%AE%A1%E7%90%86%E6%A8%A1%E5%9D%97" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>考试信息管理模块</h2>

<h3 id="1-%E6%95%99%E5%B8%88%E4%BF%A1%E6%81%AF%E7%AE%A1%E7%90%86">
<a id="user-content-1-教师信息管理" class="anchor" href="#1-%E6%95%99%E5%B8%88%E4%BF%A1%E6%81%AF%E7%AE%A1%E7%90%86" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>1. 教师信息管理</h3>

<h4 id="%E6%89%8B%E5%8A%A8%E6%B7%BB%E5%8A%A0%E6%95%99%E5%B8%88%E4%BF%A1%E6%81%AF">
<a id="user-content-手动添加教师信息" class="anchor" href="#%E6%89%8B%E5%8A%A8%E6%B7%BB%E5%8A%A0%E6%95%99%E5%B8%88%E4%BF%A1%E6%81%AF" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>手动添加教师信息</h4>

<p>点击添加按钮，在弹窗中输入教师信息即可成功添加。</p>

<h4 id="%E6%89%B9%E9%87%8F%E5%AF%BC%E5%85%A5%E6%95%99%E5%B8%88%E4%BF%A1%E6%81%AF">
<a id="user-content-批量导入教师信息" class="anchor" href="#%E6%89%B9%E9%87%8F%E5%AF%BC%E5%85%A5%E6%95%99%E5%B8%88%E4%BF%A1%E6%81%AF" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>批量导入教师信息</h4>

<p>点击从文件中导入，文件只能是xls格式。</p>

<p>Excel格式如图所示，按列数分别为教师工号，教师姓名，教师联系方式，密码默认为教师工号。</p>

<p><a href="/public/faq/it.png" target="_blank"><img src="/public/faq/it.png" alt="批量添加范例" style="max-width:100%;"></a></p>

<p><a href="/public/faq/it.xls" title="点击下载范例文件">点击下载范例文件</a></p>

<h3 id="2-%E8%80%83%E8%AF%95%E4%BF%A1%E6%81%AF%E7%AE%A1%E7%90%86">
<a id="user-content-2-考试信息管理" class="anchor" href="#2-%E8%80%83%E8%AF%95%E4%BF%A1%E6%81%AF%E7%AE%A1%E7%90%86" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>2. 考试信息管理</h3>

<h4 id="%E6%89%8B%E5%8A%A8%E6%B7%BB%E5%8A%A0%E8%80%83%E8%AF%95%E4%BF%A1%E6%81%AF">
<a id="user-content-手动添加考试信息" class="anchor" href="#%E6%89%8B%E5%8A%A8%E6%B7%BB%E5%8A%A0%E8%80%83%E8%AF%95%E4%BF%A1%E6%81%AF" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>手动添加考试信息</h4>

<p>点击添加按钮，在弹窗中输入考试信息即可成功添加。</p>

<h4 id="%E6%89%B9%E9%87%8F%E5%AF%BC%E5%85%A5%E8%80%83%E8%AF%95%E4%BF%A1%E6%81%AF">
<a id="user-content-批量导入考试信息" class="anchor" href="#%E6%89%B9%E9%87%8F%E5%AF%BC%E5%85%A5%E8%80%83%E8%AF%95%E4%BF%A1%E6%81%AF" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>批量导入考试信息</h4>

<p>点击从文件中导入，文件只能是xls格式。<br>
Excel格式如图所示。按列数分别为考试时间，考试编号，考试名称，考试班级，考试人数，考试地点，需要分配教师个数。  </p>

<p><a href="/public/faq/ie.png" target="_blank"><img src="/public/faq/ie.png" alt="批量添加范例" style="max-width:100%;"></a>  </p>

<p><a href="/public/faq/ie.xls" title="点击下载范例文件">点击下载范例文件</a></p>

<p>注意：新建一个考试时间小于当前日期时可以创建，但是不能正常使用。</p>

<h3 id="3-%E8%80%83%E8%AF%95%E5%88%86%E9%85%8D">
<a id="user-content-3-考试分配" class="anchor" href="#3-%E8%80%83%E8%AF%95%E5%88%86%E9%85%8D" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>3. 考试分配</h3>

<p>系统分为自动分配和手动分配。</p>

<h4 id="%E6%89%8B%E5%8A%A8%E5%88%86%E9%85%8D">
<a id="user-content-手动分配" class="anchor" href="#%E6%89%8B%E5%8A%A8%E5%88%86%E9%85%8D" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>手动分配</h4>

<p>点击左侧需要手动分配的考试信息条目，再点击右侧手动分配的教师的条目，最后点击手动分配即可将指定教师分配给制定考试。</p>

<h4 id="%E8%87%AA%E5%8A%A8%E5%88%86%E9%85%8D">
<a id="user-content-自动分配" class="anchor" href="#%E8%87%AA%E5%8A%A8%E5%88%86%E9%85%8D" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>自动分配</h4>

<p>点击自动分配，系统将自动按照教师本学期监考次数升序排列来为未分配教师的考试分配相应教师，请在自动分配前将需要手动分配的考试分配完毕，否则将自动分配。</p>

<p>注意：</p>

<ul>
<li>所有考试分配需要在考试前一天进行，考试当天会锁死不能分配。</li>
<li>自动分配模块若分配有误或者无法分配可能原因是开学日期设置错误，请在设置中查看开学日期设置是否正确。</li>
</ul>

<h3 id="4-%E6%95%99%E5%B8%88%E7%9B%91%E8%80%83%E7%BB%9F%E8%AE%A1">
<a id="user-content-4-教师监考统计" class="anchor" href="#4-%E6%95%99%E5%B8%88%E7%9B%91%E8%80%83%E7%BB%9F%E8%AE%A1" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>4. 教师监考统计</h3>

<p>选择相应学期可查看该学期所有教师的监考次数，点击导出可将数据导出至Excel表格。</p>

<h3 id="5-%E7%9F%AD%E4%BF%A1%E6%8E%A8%E9%80%81%E7%AE%A1%E7%90%86">
<a id="user-content-5-短信推送管理" class="anchor" href="#5-%E7%9F%AD%E4%BF%A1%E6%8E%A8%E9%80%81%E7%AE%A1%E7%90%86" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>5. 短信推送管理</h3>

<p>短信推送分为全部推送和部分推送。</p>

<ul>
<li>部分推送：通过ctrl和shift选择下面想要部分推送的条目进行部分推送，点击推送按钮来进行部分推送。</li>
<li>全部推送：点击全部推送按钮来推送全部未开考且教师已接受的考试条目。</li>
</ul>

<h2 id="%E5%9F%BA%E7%A1%80%E5%8F%82%E6%95%B0%E7%AE%A1%E7%90%86">
<a id="user-content-基础参数管理" class="anchor" href="#%E5%9F%BA%E7%A1%80%E5%8F%82%E6%95%B0%E7%AE%A1%E7%90%86" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>基础参数管理</h2>

<p>在该模块您可以任意修改您的系统名称。</p>

<h3 id="1-%E5%AD%A6%E6%9C%9F%E7%AE%A1%E7%90%86">
<a id="user-content-1-学期管理" class="anchor" href="#1-%E5%AD%A6%E6%9C%9F%E7%AE%A1%E7%90%86" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>1. 学期管理</h3>

<h4 id="%E8%AE%BE%E7%BD%AE%E6%96%B0%E5%AD%A6%E6%9C%9F">
<a id="user-content-设置新学期" class="anchor" href="#%E8%AE%BE%E7%BD%AE%E6%96%B0%E5%AD%A6%E6%9C%9F" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>设置新学期</h4>

<p>新学期开始后需要管理员手动设置新学期开学日期（即开学上课的第一天日期）<br>
注意：设置新学期后旧学期的所有考试及监考统计信息将转为上一学年的历史数据，所以不要随意设置新学期否则可能出现数据丢失等情况。</p>

<h4 id="%E4%BF%AE%E6%94%B9%E6%9C%AC%E5%AD%A6%E6%9C%9F%E5%BC%80%E5%AD%A6%E6%97%A5%E6%9C%9F">
<a id="user-content-修改本学期开学日期" class="anchor" href="#%E4%BF%AE%E6%94%B9%E6%9C%AC%E5%AD%A6%E6%9C%9F%E5%BC%80%E5%AD%A6%E6%97%A5%E6%9C%9F" aria-hidden="true"><span aria-hidden="true" class="octicon octicon-link"></span></a>修改本学期开学日期</h4>

<p>如果您开学日期设置错误导致自动分配考试不能使用，可以在此处修改开学日期。</p>
<div style="height: 30px"></div>

</article>


</body></html>