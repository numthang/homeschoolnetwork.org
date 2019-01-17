<?php

/* /home/vsites/homeschool.in.th/themes/responsiv-flat/pages/ui-elements.htm */
class __TwigTemplate_737355b3e3c6425cbbc015405f65957b447dd589468169b4f5284f53bd8ae9df extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 2
        echo "    <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/javascript/pages/ui-elements.js"));
        // line 4
        echo "\"></script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 6
        echo "
<div class=\"container\">
\t
\t<h3 class=\"demo-panel-title\">Buttons</h3>
\t
\t<div class=\"row demo-row\">
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Primary Button</a>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-warning\">Warning Button</a>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-default\">Default Button</a>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-danger\">Danger Button</a>
\t    </div>
\t</div> <!-- /row -->
\t
\t<div class=\"row demo-row\">
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-success\">Success Button</a>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-inverse\">Inverse Button</a>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-info\">Info Button</a>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-default disabled\">Disabled Button</a>
\t    </div>
\t</div> <!-- /row -->
\t
\t<h3 class=\"demo-panel-title\">Input</h3>
\t<div class=\"row\">
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <div class=\"form-group\">
\t            <input type=\"text\" value=\"\" placeholder=\"Inactive\" class=\"form-control\" />
\t        </div>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <div class=\"form-group has-error\">
\t            <input type=\"text\" value=\"\" placeholder=\"Error\" class=\"form-control\" />
\t        </div>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <div class=\"form-group has-success\">
\t            <input type=\"text\" value=\"\" placeholder=\"Success\" class=\"form-control\" />
\t            <span class=\"input-icon fui-check-inverted\"></span>
\t        </div>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <div class=\"form-group\">
\t            <input type=\"text\" value=\"Disabled\" disabled=\"disabled\" class=\"form-control\" />
\t        </div>
\t    </div>
\t</div> <!-- /row -->
\t
\t<div class=\"row\">
\t    <div class=\"col-xs-3\">
\t        <h3 class=\"demo-panel-title\">Dropdown</h3>
\t
\t        <div class=\"btn-group\">
\t            <button data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\" type=\"button\">Default <span class=\"caret\"></span></button>
\t            <ul role=\"menu\" class=\"dropdown-menu\">
\t                <li><a href=\"#\">Action</a></li>
\t                <li><a href=\"#\">Another action</a></li>
\t                <li><a href=\"#\">Something else here</a></li>
\t                <li class=\"divider\"></li>
\t                <li><a href=\"#\">Separated link</a></li>
\t            </ul>
\t        </div><!-- /btn-group -->
\t    </div> <!-- /.col-xs-3 -->
\t    <div class=\"col-xs-3\">
\t        <h3 class=\"demo-panel-title\">Select</h3>
\t        <select class=\"form-control select select-primary\" data-toggle=\"select\">
\t            <option value=\"0\">Choose hero</option>
\t            <option value=\"1\">Spider Man</option>
\t            <option value=\"2\">Wolverine</option>
\t            <option value=\"3\">Captain America</option>
\t            <option value=\"4\" selected>X-Men</option>
\t            <option value=\"5\">Crocodile</option>
\t        </select>
\t    </div> <!-- /.col-xs-3 -->
\t    <div class=\"col-xs-6\">
\t        <h3 class=\"demo-panel-title\">Tags input</h3>
\t        <div class=\"tagsinput-primary\">
\t            <input name=\"tagsinput\" class=\"tagsinput\" data-role=\"tagsinput\" value=\"School, Teacher, Colleague\" />
\t        </div>
\t    </div> <!-- /.col-xs-6 -->
\t</div> <!-- /.row -->
\t
\t<h3 class=\"demo-panel-title\">Navbar</h3>
\t<div class=\"row demo-row\">
\t    <div class=\"col-xs-12\">
\t        <nav class=\"navbar navbar-inverse navbar-embossed\" role=\"navigation\">
\t            <div class=\"navbar-header\">
\t                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-01\">
\t                    <span class=\"sr-only\">Toggle navigation</span>
\t                </button>
\t                <a class=\"navbar-brand\" href=\"#\">Flat UI</a>
\t            </div>
\t            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-01\">
\t                <ul class=\"nav navbar-nav navbar-left\">
\t                    <li><a href=\"#fakelink\">Menu Item<span class=\"navbar-unread\">1</span></a></li>
\t                    <li class=\"dropdown\">
\t                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Messages <b class=\"caret\"></b></a>
\t                        <span class=\"dropdown-arrow\"></span>
\t                        <ul class=\"dropdown-menu\">
\t                            <li><a href=\"#\">Action</a></li>
\t                            <li><a href=\"#\">Another action</a></li>
\t                            <li><a href=\"#\">Something else here</a></li>
\t                            <li class=\"divider\"></li>
\t                            <li><a href=\"#\">Separated link</a></li>
\t                        </ul>
\t                    </li>
\t                    <li><a href=\"#fakelink\">About Us</a></li>
\t                 </ul>
\t                 <form class=\"navbar-form navbar-right\" action=\"#\" role=\"search\">
\t                    <div class=\"form-group\">
\t                        <div class=\"input-group\">
\t                            <input class=\"form-control\" id=\"navbarInput-01\" type=\"search\" placeholder=\"Search\">
\t                            <span class=\"input-group-btn\">
\t                                <button type=\"submit\" class=\"btn\"><span class=\"fui-search\"></span></button>
\t                            </span>
\t                        </div>
\t                    </div>
\t                </form>
\t            </div><!-- /.navbar-collapse -->
\t        </nav><!-- /navbar -->
\t    </div>
\t</div> <!-- /row -->
\t
\t<div class=\"row\">
\t    <div class=\"col-sm-5  col-xs-12\">
\t        <h3 class=\"demo-panel-title\">Progress bars &amp; Sliders</h3>
\t        <div class=\"progress\">
\t            <div class=\"progress-bar\" style=\"width: 45%;\"></div>
\t        </div>
\t        <br/>
\t        <div class=\"progress\">
\t            <div class=\"progress-bar\" style=\"width: 40%;\"></div>
\t            <div class=\"progress-bar progress-bar-warning\" style=\"width: 10%;\"></div>
\t            <div class=\"progress-bar progress-bar-danger\" style=\"width: 10%;\"></div>
\t            <div class=\"progress-bar progress-bar-success\" style=\"width: 10%;\"></div>
\t            <div class=\"progress-bar progress-bar-info\" style=\"width: 10%;\"></div>
\t        </div>
\t        <br/>
\t        <div id=\"slider\" class=\"ui-slider\">
\t            <div class=\"ui-slider-segment\"></div>
\t            <div class=\"ui-slider-segment\"></div>
\t            <div class=\"ui-slider-segment\"></div>
\t        </div>
\t    </div> <!-- /sliders -->
\t
\t    <div class=\"col-sm-6 col-sm-offset-1 col-xs-12\">
\t        <h3 class=\"demo-panel-title\">Navigation</h3>
\t        <div class=\"row demo-navigation\">
\t            <div class=\"col-sm-6 col-xs-12\">
\t                <div class=\"btn-toolbar\">
\t                    <div class=\"btn-group\">
\t                        <a class=\"btn btn-primary\" href=\"#fakelink\"><span class=\"fui-time\"></span></a>
\t                        <a class=\"btn btn-primary\" href=\"#fakelink\"><span class=\"fui-photo\"></span></a>
\t                        <a class=\"btn btn-primary active\" href=\"#fakelink\"><span class=\"fui-heart\"></span></a>
\t                        <a class=\"btn btn-primary\" href=\"#fakelink\"><span class=\"fui-eye\"></span></a>
\t                    </div>
\t                </div> <!-- /toolbar -->
\t            </div>
\t            <div class=\"ccol-sm-6 col-xs-12 demo-pager\">
\t                <ul class=\"pager\">
\t                    <li class=\"previous\">
\t                        <a href=\"#fakelink\">
\t                            <span class=\"fui-arrow-left\"></span>
\t                            <span>All messages</span>
\t                        </a>
\t                    </li>
\t                    <li class=\"next\">
\t                        <a href=\"#fakelink\">
\t                            <span class=\"fui-arrow-right\"></span>
\t                        </a>
\t                    </li>
\t                </ul> <!-- /pager -->
\t            </div>
\t        </div> <!-- /demo-navigation -->
\t
\t        <div >
\t            <ul class=\"pagination\">
\t                <li class=\"previous\"><a href=\"#fakelink\" class=\"fui-arrow-left\"></a></li>
\t                <li class=\"active\"><a href=\"#fakelink\">1</a></li>
\t                <li><a href=\"#fakelink\">2</a></li>
\t                <li><a href=\"#fakelink\">3</a></li>
\t                <li><a href=\"#fakelink\">4</a></li>
\t                <li class=\"hidden-xs\"><a href=\"#fakelink\">5</a></li>
\t                <li class=\"hidden-xs\"><a href=\"#fakelink\">6</a></li>
\t                <li class=\"hidden-xs\"><a href=\"#fakelink\">7</a></li>
\t                <li class=\"hidden-xs\"><a href=\"#fakelink\">8</a></li>
\t                <li class=\"next\"><a href=\"#fakelink\" class=\"fui-arrow-right\"></a></li>
\t            </ul>
\t        </div> <!-- /pagination -->
\t    </div> <!-- /navigation -->
\t</div> <!-- /row -->
\t
\t<div class=\"row\">
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <h3 class=\"demo-panel-title\">Checkboxes</h3>
\t        <label class=\"checkbox\" for=\"checkbox1\">
\t            <input type=\"checkbox\" value=\"\" id=\"checkbox1\" data-toggle=\"checkbox\">
\t            Unchecked
\t        </label>
\t        <label class=\"checkbox\" for=\"checkbox2\">
\t            <input type=\"checkbox\" checked=\"checked\" value=\"\" id=\"checkbox2\" data-toggle=\"checkbox\" checked=\"\">
\t            Checked
\t        </label>
\t        <label class=\"checkbox\" for=\"checkbox3\">
\t            <input type=\"checkbox\" value=\"\" id=\"checkbox3\" data-toggle=\"checkbox\" disabled=\"\">
\t            Disabled unchecked
\t        </label>
\t        <label class=\"checkbox\" for=\"checkbox4\">
\t            <input type=\"checkbox\" checked=\"checked\" value=\"\" id=\"checkbox4\" data-toggle=\"checkbox\" disabled=\"\" checked=\"\">
\t            Disabled checked
\t        </label>
\t    </div> <!-- /checkboxes col-xs-3 -->
\t
\t\t<div class=\"col-sm-3 col-xs-6\">
\t\t\t<h3 class=\"demo-panel-title\">Radio Buttons</h3>
\t        <label class=\"radio\">
\t            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" data-toggle=\"radio\">
\t            Radio is off
\t        </label>
\t        <label class=\"radio\">
\t            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option1\" data-toggle=\"radio\" checked=\"\">
\t            Radio is on
\t        </label>
\t
\t        <label class=\"radio\">
\t            <input type=\"radio\" name=\"optionsRadiosDisabled\" id=\"optionsRadios3\" value=\"option2\" data-toggle=\"radio\" disabled=\"\">
\t            Disabled radio is off
\t        </label>
\t        <label class=\"radio\">
\t            <input type=\"radio\" name=\"optionsRadiosDisabled\" id=\"optionsRadios4\" value=\"option2\" data-toggle=\"radio\" checked=\"\" disabled=\"\">
\t            Disabled radio is on
\t        </label>
\t    </div> <!-- /radios col-xs-3 -->

\t    <div class=\"col-sm-3 col-xs-6\">
\t        <h3 class=\"demo-panel-title\">Switches</h3>
\t
\t        <table width=\"100%\">
\t            <tr>
\t                <td width=\"50%\" class=\"pbm\">
\t                    <input type=\"checkbox\" checked data-toggle=\"switch\" id=\"custom-switch-01\" />
\t                </td>
\t                <td class=\"pbm\">
\t                    <input type=\"checkbox\" data-toggle=\"switch\" id=\"custom-switch-02\" />
\t                </td>
\t            </tr>
\t            <tr>
\t                <td class=\"pbm\">
\t                    <div class=\"bootstrap-switch-square\">
\t                        <input type=\"checkbox\" checked data-toggle=\"switch\" id=\"custom-switch-03\" data-on-text=\"<span class='fui-check'></span>\" data-off-text=\"<span class='fui-cross'></span>\" />
\t                    </div>
\t                </td>
\t                <td class=\"pbm\">
\t                    <div class=\"bootstrap-switch-square\">
\t                        <input type=\"checkbox\" data-toggle=\"switch\" id=\"custom-switch-04\" />
\t                    </div>
\t                </td>
\t            </tr>
\t            <tr>
\t                <td>
\t                    <input type=\"checkbox\" checked disabled data-toggle=\"switch\" id=\"custom-switch-5\" />
\t                </td>
\t                <td>
\t                    <input type=\"checkbox\" checked disabled data-toggle=\"switch\" id=\"custom-switch-6\" />
\t                </td>
\t            </tr>
\t        </table>
\t    </div> <!-- /.col-xs-3 -->
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <h3 class=\"demo-panel-title\">Share</h3>
\t        <div class=\"share mrl\">
\t            <ul>
\t                <li>
\t                    <label class=\"share-label\" for=\"share-toggle2\">Facebook</label>
\t                    <input type=\"checkbox\" data-toggle=\"switch\" />
\t                </li>
\t                <li>
\t                    <label class=\"share-label\" for=\"share-toggle4\">Twitter</label>
\t                    <input type=\"checkbox\" checked=\"\" data-toggle=\"switch\" />
\t                </li>
\t                <li>
\t                    <label class=\"share-label\" for=\"share-toggle6\">Pinterest</label>
\t                    <input type=\"checkbox\" data-toggle=\"switch\" />
\t                </li>
\t            </ul>
\t            <a href=\"#\" class=\"btn btn-primary btn-block btn-large\">Share</a>
\t        </div> <!-- /share -->
\t    </div><!-- /.col-xs-3 -->
\t</div> <!-- /.row -->
\t
\t<div class=\"demo-row typography-row\">
\t\t<div class=\"demo-title\">
\t\t\t<h3 class=\"demo-panel-title\">Typography</h3>
\t\t</div>
\t\t<div class=\"demo-content\">
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<h1><span class=\"demo-heading-note\">Header 1</span>Showers across the W</h1>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<h2><span class=\"demo-heading-note\">Header 2</span>Give this quartet a few</h2>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<h3><span class=\"demo-heading-note\">Header 3</span>The Vatican transitions to a</h3>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<h4><span class=\"demo-heading-note\">Header 4</span>Great American Bites: Telluride's Oak, The</h4>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<h5><span class=\"demo-heading-note\">Header 5</span>Author Diane Alberts loves her some good</h5>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<h6><span class=\"demo-heading-note\">Header 6</span>With the success of young-adult book-to-movie</h6>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<span class=\"demo-text-note\">Paragraph</span>
\t                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <strong>Donec ullamcorper</strong> nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<span class=\"demo-text-note\">Image</span>
\t                <img src=\"";
        // line 337
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ui-elements/example-image.jpg");
        echo "\" alt=\"example-image\" class=\"img-rounded img-responsive\">
\t                <p class=\"img-comment\"><strong>Note:</strong> gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<span class=\"demo-text-note\">Lead Text</span>
\t\t\t\t\t<p class=\"lead\">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<span class=\"demo-text-note\">Quote</span>
\t                <blockquote>
\t                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus.</p>
\t                    <small>Steve Jobs, CEO Apple</small>
\t                </blockquote>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<span class=\"demo-text-note\">Small Font</span>
\t                <p><small>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</small></p>
\t\t\t</div>
\t\t</div><!-- /.demo-content-wide -->
\t</div><!-- /.demo-row -->
\t
\t<h3 class=\"demo-panel-title mbl pbl\">Samples</h3>
\t<div class=\"row demo-samples\">
\t    <div class=\"col-xs-4\">
\t        <div class=\"todo\">
\t            <div class=\"todo-search\">
\t                <input class=\"todo-search-field\" type=\"search\" value=\"\" placeholder=\"Search\" />
\t            </div>
\t            <ul>
\t                <li class=\"todo-done\">
\t                    <div class=\"todo-icon fui-user\"></div>
\t                    <div class=\"todo-content\">
\t                        <h4 class=\"todo-name\">
\t                            Meet <strong>Adrian</strong> at <strong>6pm</strong>
\t                        </h4>
\t                        Times Square
\t                    </div>
\t                </li>
\t                <li>
\t                    <div class=\"todo-icon fui-list\"></div>
\t                    <div class=\"todo-content\">
\t                        <h4 class=\"todo-name\">
\t                            Chat with <strong>V.Kudinov</strong>
\t                        </h4>
\t                        Skype conference an 9 am
\t                    </div>
\t                </li>
\t                <li>
\t                    <div class=\"todo-icon fui-eye\"></div>
\t                    <div class=\"todo-content\">
\t                        <h4 class=\"todo-name\">
\t                            Watch <strong>Iron Man</strong>
\t                        </h4>
\t                        1998 Broadway
\t                    </div>
\t                </li>
\t                <li>
\t                    <div class=\"todo-icon fui-time\"></div>
\t                    <div class=\"todo-content\">
\t                        <h4 class=\"todo-name\">
\t                            Fix bug on a <strong>Website</strong>
\t                        </h4>
\t                        As soon as possible
\t                    </div>
\t                </li>
\t            </ul>
\t        </div><!-- /.todo -->
\t    </div><!-- /.col-xs-4 -->
\t
\t    <div class=\"col-xs-8\">
\t        <video class=\"video-js\" preload=\"auto\" poster=\"";
        // line 407
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ui-elements/video/poster.jpg");
        echo "\" data-setup=\"{}\">
\t            <source src=\"http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.mp4\" type=\"video/mp4\">
\t            <source src=\"http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.webm\" type=\"video/webm\">
\t        </video>
\t    </div> <!-- /video -->
\t</div>
\t
\t<h3 class=\"demo-panel-title\">Color Swatches</h3>
\t<div class=\"row demo-swatches-row\">
\t    <div class=\"swatches-col\">
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-turquoise\">
\t                <dt>#1abc9c</dt>
\t                <dd>Turquoise</dd>
\t            </dl>
\t            <dl class=\"palette palette-green-sea\">
\t                <dt>#16a085</dt>
\t                <dd>Green sea</dd>
\t            </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-emerald\">
\t            <dt>#2ecc71</dt>
\t            <dd>Emerald</dd>
\t        </dl>
\t        <dl class=\"palette palette-nephritis\">
\t            <dt>#27ae60</dt>
\t            <dd>Nephritis</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-peter-river\">
\t            <dt>#3498db</dt>
\t            <dd>Peter river</dd>
\t        </dl>
\t        <dl class=\"palette palette-belize-hole\">
\t            <dt>#2980b9</dt>
\t            <dd>Belize hole</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-amethyst\">
\t            <dt>#9b59b6</dt>
\t            <dd>Amethyst</dd>
\t        </dl>
\t        <dl class=\"palette palette-wisteria\">
\t            <dt>#8e44ad</dt>
\t            <dd>Wisteria</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-wet-asphalt\">
\t            <dt>#34495e</dt>
\t            <dd>Wet asphalt</dd>
\t        </dl>
\t        <dl class=\"palette palette-midnight-blue\">
\t            <dt>#2c3e50</dt>
\t            <dd>Midnight blue</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-sun-flower\">
\t            <dt>#f1c40f</dt>
\t            <dd>Sun flower</dd>
\t        </dl>
\t        <dl class=\"palette palette-orange\">
\t            <dt>#f39c12</dt>
\t            <dd>Orange</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-carrot\">
\t            <dt>#e67e22</dt>
\t            <dd>Carrot</dd>
\t        </dl>
\t        <dl class=\"palette palette-pumpkin\">
\t            <dt>#d35400</dt>
\t            <dd>Pumpkin</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-alizarin\">
\t            <dt>#e74c3c</dt>
\t            <dd>Alizarin</dd>
\t        </dl>
\t        <dl class=\"palette palette-pomegranate\">
\t            <dt>#c0392b</dt>
\t            <dd>Pomegranate</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-clouds\">
\t            <dt>#ecf0f1</dt>
\t            <dd>Clouds</dd>
\t        </dl>
\t        <dl class=\"palette palette-silver\">
\t            <dt>#bdc3c7</dt>
\t            <dd>Silver</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-concrete\">
\t            <dt>#95a5a6</dt>
\t            <dd>Concrete</dd>
\t        </dl>
\t        <dl class=\"palette palette-asbestos\">
\t            <dt>#7f8c8d</dt>
\t            <dd>Asbestos</dd>
\t        </dl>
\t        </div>
\t    </div> <!-- /swatches items -->
\t    <div class=\"swatches-desc-col\">
\t        <h6 class=\"palette-headline\">SWATCHES</h6>
\t        <p class=\"palette-paragraph\">
\t            Colors &mdash; is almost the most important part of the <strong>Flat UI</strong>. Better to use different shades of provided colors than new.
\t        </p>
\t    </div> <!-- /swatches desc -->
\t</div> <!-- /swatches row -->
\t
\t<h3 class=\"demo-panel-title\">Icons <small>(14)</small></h3>
\t<div class=\"demo-illustrations\">
\t    <div class=\"demo-content\">
\t        <div><img src=\"";
        // line 529
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/toilet-paper.svg");
        echo "\" alt=\"Toilet-Paper\"></div>
\t        <div><img src=\"";
        // line 530
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/gift-box.svg");
        echo "\" alt=\"Gift-Box\"></div>
\t        <div><img src=\"";
        // line 531
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/pencils.svg");
        echo "\" alt=\"Pensils\"></div>
\t        <div><img src=\"";
        // line 532
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/clipboard.svg");
        echo "\" alt=\"Clipboard\"></div>
\t        <div><img src=\"";
        // line 533
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/retina.svg");
        echo "\" alt=\"Retina\"></div>
\t        <div><img src=\"";
        // line 534
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/compas.svg");
        echo "\" alt=\"Compas\"></div>
\t        <div><img src=\"";
        // line 535
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/map.svg");
        echo "\" alt=\"Map\"></div>
\t        <div><img src=\"";
        // line 536
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/chat.svg");
        echo "\" alt=\"Chat\"></div>
\t        <div><img src=\"";
        // line 537
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/mail.svg");
        echo "\" alt=\"Mail\"></div>
\t        <div><img src=\"";
        // line 538
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/book.svg");
        echo "\" alt=\"Book\"></div>
\t        <div><img src=\"";
        // line 539
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/calendar.svg");
        echo "\" alt=\"Calendar\"></div>
\t        <div><img src=\"";
        // line 540
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/paper-bag.svg");
        echo "\" alt=\"Pocket\"></div>
\t        <div><img src=\"";
        // line 541
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/clocks.svg");
        echo "\" alt=\"Watches\"></div>
\t        <div><img src=\"";
        // line 542
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/svg/loop.svg");
        echo "\" alt=\"Infinity-Loop\"></div>
\t    </div>
\t</div>
\t
\t<h3 class=\"demo-panel-title\">Glyphs <small>(70)</small></h3>
\t<div class=\"demo-icons\">
\t    <div class=\"demo-content\">
\t        <span class=\"fui-info-circle\"></span>
\t        <span class=\"fui-alert-circle\"></span>
\t        <span class=\"fui-question-circle\"></span>
\t        <span class=\"fui-check-circle\"></span>
\t        <span class=\"fui-cross-circle\"></span>
\t        <span class=\"fui-plus-circle\"></span>
\t        <span class=\"fui-window\"></span>
\t        <span class=\"fui-windows\"></span>
\t        <span class=\"fui-upload\"></span>
\t        <span class=\"fui-arrow-right\"></span>
\t        <span class=\"fui-arrow-left\"></span>
\t        <span class=\"fui-loop\"></span>
\t        <span class=\"fui-cmd\"></span>
\t        <span class=\"fui-mic\"></span>
\t        <span class=\"fui-export\"></span>
\t        <span class=\"fui-heart\"></span>
\t        <span class=\"fui-location\"></span>
\t        <span class=\"fui-plus\"></span>
\t        <span class=\"fui-check\"></span>
\t        <span class=\"fui-cross\"></span>
\t        <span class=\"fui-list\"></span>
\t        <span class=\"fui-new\"></span>
\t        <span class=\"fui-video\"></span>
\t        <span class=\"fui-photo\"></span>
\t        <span class=\"fui-time\"></span>
\t        <span class=\"fui-eye\"></span>
\t        <span class=\"fui-chat\"></span>
\t        <span class=\"fui-home\"></span>
\t        <span class=\"fui-search\"></span>
\t        <span class=\"fui-user\"></span>
\t        <span class=\"fui-mail\"></span>
\t        <span class=\"fui-lock\"></span>
\t        <span class=\"fui-power\"></span>
\t        <span class=\"fui-star\"></span>
\t        <span class=\"fui-calendar\"></span>
\t        <span class=\"fui-gear\"></span>
\t        <span class=\"fui-bookmark\"></span>
\t        <span class=\"fui-exit\"></span>
\t        <span class=\"fui-trash\"></span>
\t        <span class=\"fui-folder\"></span>
\t        <span class=\"fui-bubble\"></span>
\t        <span class=\"fui-calendar-solid\"></span>
\t        <span class=\"fui-star-2\"></span>
\t        <span class=\"fui-credit-card\"></span>
\t        <span class=\"fui-clip\"></span>
\t        <span class=\"fui-link\"></span>
\t        <span class=\"fui-pause\"></span>
\t        <span class=\"fui-play\"></span>
\t        <span class=\"fui-volume\"></span>
\t        <span class=\"fui-mute\"></span>
\t        <span class=\"fui-resize\"></span>
\t        <span class=\"fui-tag\"></span>
\t        <span class=\"fui-document\"></span>
\t        <span class=\"fui-image\"></span>
\t        <span class=\"fui-triangle-up\"></span>
\t        <span class=\"fui-triangle-up-small\"></span>
\t        <span class=\"fui-triangle-right-large\"></span>
\t        <span class=\"fui-triangle-left-large\"></span>
\t        <span class=\"fui-triangle-down\"></span>
\t        <span class=\"fui-triangle-down-small\"></span>
\t        <span class=\"fui-radio-unchecked\"></span>
\t        <span class=\"fui-radio-checked\"></span>
\t        <span class=\"fui-checkbox-unchecked\"></span>
\t        <span class=\"fui-checkbox-checked\"></span>
\t        <span class=\"fui-list-thumbnailed\"></span>
\t        <span class=\"fui-list-small-thumbnails\"></span>
\t        <span class=\"fui-list-numbered\"></span>
\t        <span class=\"fui-list-large-thumbnails\"></span>
\t        <span class=\"fui-list-columned\"></span>
\t        <span class=\"fui-list-bulleted\"></span>
\t    </div><!-- /.demo-content -->
\t</div><!-- /.demo-icons -->
\t
\t<h3 class=\"demo-panel-title\">Social <small>(27)</small></h3>
\t<div class=\"demo-icons\">
\t    <div class=\"demo-content\">
\t        <span class=\"fui-facebook\"></span>
\t        <span class=\"fui-youtube\"></span>
\t        <span class=\"fui-vimeo\"></span>
\t        <span class=\"fui-twitter\"></span>
\t        <span class=\"fui-stumbleupon\"></span>
\t        <span class=\"fui-spotify\"></span>
\t        <span class=\"fui-skype\"></span>
\t        <span class=\"fui-pinterest\"></span>
\t        <span class=\"fui-path\"></span>
\t        <span class=\"fui-linkedin\"></span>
\t        <span class=\"fui-google-plus\"></span>
\t        <span class=\"fui-dribbble\"></span>
\t        <span class=\"fui-behance\"></span>
\t        <span class=\"fui-yelp\"></span>
\t        <span class=\"fui-wordpress\"></span>
\t        <span class=\"fui-windows-8\"></span>
\t        <span class=\"fui-vine\"></span>
\t        <span class=\"fui-tumblr\"></span>
\t        <span class=\"fui-paypal\"></span>
\t        <span class=\"fui-lastfm\"></span>
\t        <span class=\"fui-instagram\"></span>
\t        <span class=\"fui-html5\"></span>
\t        <span class=\"fui-github\"></span>
\t        <span class=\"fui-foursquare\"></span>
\t        <span class=\"fui-dropbox\"></span>
\t        <span class=\"fui-android\"></span>
\t        <span class=\"fui-apple\"></span>
\t    </div><!-- /.demo-content -->
\t</div><!-- /.demo-icons -->
    
    <h3 class=\"demo-panel-title\">Font Awesome Icons <small>(786)</small></h3>
    ";
        // line 656
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("fa-all-icons"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 657
        echo "    
    <br/>

</div>";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/ui-elements.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  737 => 657,  733 => 656,  616 => 542,  612 => 541,  608 => 540,  604 => 539,  600 => 538,  596 => 537,  592 => 536,  588 => 535,  584 => 534,  580 => 533,  576 => 532,  572 => 531,  568 => 530,  564 => 529,  439 => 407,  366 => 337,  33 => 6,  31 => 1,  28 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put scripts %}
    <script src=\"{{ [
        'assets/javascript/pages/ui-elements.js',
    ]|theme }}\"></script>
{% endput %}

<div class=\"container\">
\t
\t<h3 class=\"demo-panel-title\">Buttons</h3>
\t
\t<div class=\"row demo-row\">
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-primary\">Primary Button</a>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-warning\">Warning Button</a>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-default\">Default Button</a>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-danger\">Danger Button</a>
\t    </div>
\t</div> <!-- /row -->
\t
\t<div class=\"row demo-row\">
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-success\">Success Button</a>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-inverse\">Inverse Button</a>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-info\">Info Button</a>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <a href=\"#fakelink\" class=\"btn btn-block btn-lg btn-default disabled\">Disabled Button</a>
\t    </div>
\t</div> <!-- /row -->
\t
\t<h3 class=\"demo-panel-title\">Input</h3>
\t<div class=\"row\">
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <div class=\"form-group\">
\t            <input type=\"text\" value=\"\" placeholder=\"Inactive\" class=\"form-control\" />
\t        </div>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <div class=\"form-group has-error\">
\t            <input type=\"text\" value=\"\" placeholder=\"Error\" class=\"form-control\" />
\t        </div>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <div class=\"form-group has-success\">
\t            <input type=\"text\" value=\"\" placeholder=\"Success\" class=\"form-control\" />
\t            <span class=\"input-icon fui-check-inverted\"></span>
\t        </div>
\t    </div>
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <div class=\"form-group\">
\t            <input type=\"text\" value=\"Disabled\" disabled=\"disabled\" class=\"form-control\" />
\t        </div>
\t    </div>
\t</div> <!-- /row -->
\t
\t<div class=\"row\">
\t    <div class=\"col-xs-3\">
\t        <h3 class=\"demo-panel-title\">Dropdown</h3>
\t
\t        <div class=\"btn-group\">
\t            <button data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\" type=\"button\">Default <span class=\"caret\"></span></button>
\t            <ul role=\"menu\" class=\"dropdown-menu\">
\t                <li><a href=\"#\">Action</a></li>
\t                <li><a href=\"#\">Another action</a></li>
\t                <li><a href=\"#\">Something else here</a></li>
\t                <li class=\"divider\"></li>
\t                <li><a href=\"#\">Separated link</a></li>
\t            </ul>
\t        </div><!-- /btn-group -->
\t    </div> <!-- /.col-xs-3 -->
\t    <div class=\"col-xs-3\">
\t        <h3 class=\"demo-panel-title\">Select</h3>
\t        <select class=\"form-control select select-primary\" data-toggle=\"select\">
\t            <option value=\"0\">Choose hero</option>
\t            <option value=\"1\">Spider Man</option>
\t            <option value=\"2\">Wolverine</option>
\t            <option value=\"3\">Captain America</option>
\t            <option value=\"4\" selected>X-Men</option>
\t            <option value=\"5\">Crocodile</option>
\t        </select>
\t    </div> <!-- /.col-xs-3 -->
\t    <div class=\"col-xs-6\">
\t        <h3 class=\"demo-panel-title\">Tags input</h3>
\t        <div class=\"tagsinput-primary\">
\t            <input name=\"tagsinput\" class=\"tagsinput\" data-role=\"tagsinput\" value=\"School, Teacher, Colleague\" />
\t        </div>
\t    </div> <!-- /.col-xs-6 -->
\t</div> <!-- /.row -->
\t
\t<h3 class=\"demo-panel-title\">Navbar</h3>
\t<div class=\"row demo-row\">
\t    <div class=\"col-xs-12\">
\t        <nav class=\"navbar navbar-inverse navbar-embossed\" role=\"navigation\">
\t            <div class=\"navbar-header\">
\t                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-01\">
\t                    <span class=\"sr-only\">Toggle navigation</span>
\t                </button>
\t                <a class=\"navbar-brand\" href=\"#\">Flat UI</a>
\t            </div>
\t            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-01\">
\t                <ul class=\"nav navbar-nav navbar-left\">
\t                    <li><a href=\"#fakelink\">Menu Item<span class=\"navbar-unread\">1</span></a></li>
\t                    <li class=\"dropdown\">
\t                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Messages <b class=\"caret\"></b></a>
\t                        <span class=\"dropdown-arrow\"></span>
\t                        <ul class=\"dropdown-menu\">
\t                            <li><a href=\"#\">Action</a></li>
\t                            <li><a href=\"#\">Another action</a></li>
\t                            <li><a href=\"#\">Something else here</a></li>
\t                            <li class=\"divider\"></li>
\t                            <li><a href=\"#\">Separated link</a></li>
\t                        </ul>
\t                    </li>
\t                    <li><a href=\"#fakelink\">About Us</a></li>
\t                 </ul>
\t                 <form class=\"navbar-form navbar-right\" action=\"#\" role=\"search\">
\t                    <div class=\"form-group\">
\t                        <div class=\"input-group\">
\t                            <input class=\"form-control\" id=\"navbarInput-01\" type=\"search\" placeholder=\"Search\">
\t                            <span class=\"input-group-btn\">
\t                                <button type=\"submit\" class=\"btn\"><span class=\"fui-search\"></span></button>
\t                            </span>
\t                        </div>
\t                    </div>
\t                </form>
\t            </div><!-- /.navbar-collapse -->
\t        </nav><!-- /navbar -->
\t    </div>
\t</div> <!-- /row -->
\t
\t<div class=\"row\">
\t    <div class=\"col-sm-5  col-xs-12\">
\t        <h3 class=\"demo-panel-title\">Progress bars &amp; Sliders</h3>
\t        <div class=\"progress\">
\t            <div class=\"progress-bar\" style=\"width: 45%;\"></div>
\t        </div>
\t        <br/>
\t        <div class=\"progress\">
\t            <div class=\"progress-bar\" style=\"width: 40%;\"></div>
\t            <div class=\"progress-bar progress-bar-warning\" style=\"width: 10%;\"></div>
\t            <div class=\"progress-bar progress-bar-danger\" style=\"width: 10%;\"></div>
\t            <div class=\"progress-bar progress-bar-success\" style=\"width: 10%;\"></div>
\t            <div class=\"progress-bar progress-bar-info\" style=\"width: 10%;\"></div>
\t        </div>
\t        <br/>
\t        <div id=\"slider\" class=\"ui-slider\">
\t            <div class=\"ui-slider-segment\"></div>
\t            <div class=\"ui-slider-segment\"></div>
\t            <div class=\"ui-slider-segment\"></div>
\t        </div>
\t    </div> <!-- /sliders -->
\t
\t    <div class=\"col-sm-6 col-sm-offset-1 col-xs-12\">
\t        <h3 class=\"demo-panel-title\">Navigation</h3>
\t        <div class=\"row demo-navigation\">
\t            <div class=\"col-sm-6 col-xs-12\">
\t                <div class=\"btn-toolbar\">
\t                    <div class=\"btn-group\">
\t                        <a class=\"btn btn-primary\" href=\"#fakelink\"><span class=\"fui-time\"></span></a>
\t                        <a class=\"btn btn-primary\" href=\"#fakelink\"><span class=\"fui-photo\"></span></a>
\t                        <a class=\"btn btn-primary active\" href=\"#fakelink\"><span class=\"fui-heart\"></span></a>
\t                        <a class=\"btn btn-primary\" href=\"#fakelink\"><span class=\"fui-eye\"></span></a>
\t                    </div>
\t                </div> <!-- /toolbar -->
\t            </div>
\t            <div class=\"ccol-sm-6 col-xs-12 demo-pager\">
\t                <ul class=\"pager\">
\t                    <li class=\"previous\">
\t                        <a href=\"#fakelink\">
\t                            <span class=\"fui-arrow-left\"></span>
\t                            <span>All messages</span>
\t                        </a>
\t                    </li>
\t                    <li class=\"next\">
\t                        <a href=\"#fakelink\">
\t                            <span class=\"fui-arrow-right\"></span>
\t                        </a>
\t                    </li>
\t                </ul> <!-- /pager -->
\t            </div>
\t        </div> <!-- /demo-navigation -->
\t
\t        <div >
\t            <ul class=\"pagination\">
\t                <li class=\"previous\"><a href=\"#fakelink\" class=\"fui-arrow-left\"></a></li>
\t                <li class=\"active\"><a href=\"#fakelink\">1</a></li>
\t                <li><a href=\"#fakelink\">2</a></li>
\t                <li><a href=\"#fakelink\">3</a></li>
\t                <li><a href=\"#fakelink\">4</a></li>
\t                <li class=\"hidden-xs\"><a href=\"#fakelink\">5</a></li>
\t                <li class=\"hidden-xs\"><a href=\"#fakelink\">6</a></li>
\t                <li class=\"hidden-xs\"><a href=\"#fakelink\">7</a></li>
\t                <li class=\"hidden-xs\"><a href=\"#fakelink\">8</a></li>
\t                <li class=\"next\"><a href=\"#fakelink\" class=\"fui-arrow-right\"></a></li>
\t            </ul>
\t        </div> <!-- /pagination -->
\t    </div> <!-- /navigation -->
\t</div> <!-- /row -->
\t
\t<div class=\"row\">
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <h3 class=\"demo-panel-title\">Checkboxes</h3>
\t        <label class=\"checkbox\" for=\"checkbox1\">
\t            <input type=\"checkbox\" value=\"\" id=\"checkbox1\" data-toggle=\"checkbox\">
\t            Unchecked
\t        </label>
\t        <label class=\"checkbox\" for=\"checkbox2\">
\t            <input type=\"checkbox\" checked=\"checked\" value=\"\" id=\"checkbox2\" data-toggle=\"checkbox\" checked=\"\">
\t            Checked
\t        </label>
\t        <label class=\"checkbox\" for=\"checkbox3\">
\t            <input type=\"checkbox\" value=\"\" id=\"checkbox3\" data-toggle=\"checkbox\" disabled=\"\">
\t            Disabled unchecked
\t        </label>
\t        <label class=\"checkbox\" for=\"checkbox4\">
\t            <input type=\"checkbox\" checked=\"checked\" value=\"\" id=\"checkbox4\" data-toggle=\"checkbox\" disabled=\"\" checked=\"\">
\t            Disabled checked
\t        </label>
\t    </div> <!-- /checkboxes col-xs-3 -->
\t
\t\t<div class=\"col-sm-3 col-xs-6\">
\t\t\t<h3 class=\"demo-panel-title\">Radio Buttons</h3>
\t        <label class=\"radio\">
\t            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" data-toggle=\"radio\">
\t            Radio is off
\t        </label>
\t        <label class=\"radio\">
\t            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option1\" data-toggle=\"radio\" checked=\"\">
\t            Radio is on
\t        </label>
\t
\t        <label class=\"radio\">
\t            <input type=\"radio\" name=\"optionsRadiosDisabled\" id=\"optionsRadios3\" value=\"option2\" data-toggle=\"radio\" disabled=\"\">
\t            Disabled radio is off
\t        </label>
\t        <label class=\"radio\">
\t            <input type=\"radio\" name=\"optionsRadiosDisabled\" id=\"optionsRadios4\" value=\"option2\" data-toggle=\"radio\" checked=\"\" disabled=\"\">
\t            Disabled radio is on
\t        </label>
\t    </div> <!-- /radios col-xs-3 -->

\t    <div class=\"col-sm-3 col-xs-6\">
\t        <h3 class=\"demo-panel-title\">Switches</h3>
\t
\t        <table width=\"100%\">
\t            <tr>
\t                <td width=\"50%\" class=\"pbm\">
\t                    <input type=\"checkbox\" checked data-toggle=\"switch\" id=\"custom-switch-01\" />
\t                </td>
\t                <td class=\"pbm\">
\t                    <input type=\"checkbox\" data-toggle=\"switch\" id=\"custom-switch-02\" />
\t                </td>
\t            </tr>
\t            <tr>
\t                <td class=\"pbm\">
\t                    <div class=\"bootstrap-switch-square\">
\t                        <input type=\"checkbox\" checked data-toggle=\"switch\" id=\"custom-switch-03\" data-on-text=\"<span class='fui-check'></span>\" data-off-text=\"<span class='fui-cross'></span>\" />
\t                    </div>
\t                </td>
\t                <td class=\"pbm\">
\t                    <div class=\"bootstrap-switch-square\">
\t                        <input type=\"checkbox\" data-toggle=\"switch\" id=\"custom-switch-04\" />
\t                    </div>
\t                </td>
\t            </tr>
\t            <tr>
\t                <td>
\t                    <input type=\"checkbox\" checked disabled data-toggle=\"switch\" id=\"custom-switch-5\" />
\t                </td>
\t                <td>
\t                    <input type=\"checkbox\" checked disabled data-toggle=\"switch\" id=\"custom-switch-6\" />
\t                </td>
\t            </tr>
\t        </table>
\t    </div> <!-- /.col-xs-3 -->
\t    <div class=\"col-sm-3 col-xs-6\">
\t        <h3 class=\"demo-panel-title\">Share</h3>
\t        <div class=\"share mrl\">
\t            <ul>
\t                <li>
\t                    <label class=\"share-label\" for=\"share-toggle2\">Facebook</label>
\t                    <input type=\"checkbox\" data-toggle=\"switch\" />
\t                </li>
\t                <li>
\t                    <label class=\"share-label\" for=\"share-toggle4\">Twitter</label>
\t                    <input type=\"checkbox\" checked=\"\" data-toggle=\"switch\" />
\t                </li>
\t                <li>
\t                    <label class=\"share-label\" for=\"share-toggle6\">Pinterest</label>
\t                    <input type=\"checkbox\" data-toggle=\"switch\" />
\t                </li>
\t            </ul>
\t            <a href=\"#\" class=\"btn btn-primary btn-block btn-large\">Share</a>
\t        </div> <!-- /share -->
\t    </div><!-- /.col-xs-3 -->
\t</div> <!-- /.row -->
\t
\t<div class=\"demo-row typography-row\">
\t\t<div class=\"demo-title\">
\t\t\t<h3 class=\"demo-panel-title\">Typography</h3>
\t\t</div>
\t\t<div class=\"demo-content\">
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<h1><span class=\"demo-heading-note\">Header 1</span>Showers across the W</h1>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<h2><span class=\"demo-heading-note\">Header 2</span>Give this quartet a few</h2>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<h3><span class=\"demo-heading-note\">Header 3</span>The Vatican transitions to a</h3>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<h4><span class=\"demo-heading-note\">Header 4</span>Great American Bites: Telluride's Oak, The</h4>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<h5><span class=\"demo-heading-note\">Header 5</span>Author Diane Alberts loves her some good</h5>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<h6><span class=\"demo-heading-note\">Header 6</span>With the success of young-adult book-to-movie</h6>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<span class=\"demo-text-note\">Paragraph</span>
\t                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <strong>Donec ullamcorper</strong> nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<span class=\"demo-text-note\">Image</span>
\t                <img src=\"{{ 'assets/images/ui-elements/example-image.jpg'|theme }}\" alt=\"example-image\" class=\"img-rounded img-responsive\">
\t                <p class=\"img-comment\"><strong>Note:</strong> gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<span class=\"demo-text-note\">Lead Text</span>
\t\t\t\t\t<p class=\"lead\">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<span class=\"demo-text-note\">Quote</span>
\t                <blockquote>
\t                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus.</p>
\t                    <small>Steve Jobs, CEO Apple</small>
\t                </blockquote>
\t\t\t</div>
\t\t\t<div class=\"demo-type-example\">
\t        \t\t<span class=\"demo-text-note\">Small Font</span>
\t                <p><small>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</small></p>
\t\t\t</div>
\t\t</div><!-- /.demo-content-wide -->
\t</div><!-- /.demo-row -->
\t
\t<h3 class=\"demo-panel-title mbl pbl\">Samples</h3>
\t<div class=\"row demo-samples\">
\t    <div class=\"col-xs-4\">
\t        <div class=\"todo\">
\t            <div class=\"todo-search\">
\t                <input class=\"todo-search-field\" type=\"search\" value=\"\" placeholder=\"Search\" />
\t            </div>
\t            <ul>
\t                <li class=\"todo-done\">
\t                    <div class=\"todo-icon fui-user\"></div>
\t                    <div class=\"todo-content\">
\t                        <h4 class=\"todo-name\">
\t                            Meet <strong>Adrian</strong> at <strong>6pm</strong>
\t                        </h4>
\t                        Times Square
\t                    </div>
\t                </li>
\t                <li>
\t                    <div class=\"todo-icon fui-list\"></div>
\t                    <div class=\"todo-content\">
\t                        <h4 class=\"todo-name\">
\t                            Chat with <strong>V.Kudinov</strong>
\t                        </h4>
\t                        Skype conference an 9 am
\t                    </div>
\t                </li>
\t                <li>
\t                    <div class=\"todo-icon fui-eye\"></div>
\t                    <div class=\"todo-content\">
\t                        <h4 class=\"todo-name\">
\t                            Watch <strong>Iron Man</strong>
\t                        </h4>
\t                        1998 Broadway
\t                    </div>
\t                </li>
\t                <li>
\t                    <div class=\"todo-icon fui-time\"></div>
\t                    <div class=\"todo-content\">
\t                        <h4 class=\"todo-name\">
\t                            Fix bug on a <strong>Website</strong>
\t                        </h4>
\t                        As soon as possible
\t                    </div>
\t                </li>
\t            </ul>
\t        </div><!-- /.todo -->
\t    </div><!-- /.col-xs-4 -->
\t
\t    <div class=\"col-xs-8\">
\t        <video class=\"video-js\" preload=\"auto\" poster=\"{{ 'assets/images/ui-elements/video/poster.jpg'|theme }}\" data-setup=\"{}\">
\t            <source src=\"http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.mp4\" type=\"video/mp4\">
\t            <source src=\"http://iurevych.github.com/Flat-UI-videos/big_buck_bunny.webm\" type=\"video/webm\">
\t        </video>
\t    </div> <!-- /video -->
\t</div>
\t
\t<h3 class=\"demo-panel-title\">Color Swatches</h3>
\t<div class=\"row demo-swatches-row\">
\t    <div class=\"swatches-col\">
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-turquoise\">
\t                <dt>#1abc9c</dt>
\t                <dd>Turquoise</dd>
\t            </dl>
\t            <dl class=\"palette palette-green-sea\">
\t                <dt>#16a085</dt>
\t                <dd>Green sea</dd>
\t            </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-emerald\">
\t            <dt>#2ecc71</dt>
\t            <dd>Emerald</dd>
\t        </dl>
\t        <dl class=\"palette palette-nephritis\">
\t            <dt>#27ae60</dt>
\t            <dd>Nephritis</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-peter-river\">
\t            <dt>#3498db</dt>
\t            <dd>Peter river</dd>
\t        </dl>
\t        <dl class=\"palette palette-belize-hole\">
\t            <dt>#2980b9</dt>
\t            <dd>Belize hole</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-amethyst\">
\t            <dt>#9b59b6</dt>
\t            <dd>Amethyst</dd>
\t        </dl>
\t        <dl class=\"palette palette-wisteria\">
\t            <dt>#8e44ad</dt>
\t            <dd>Wisteria</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-wet-asphalt\">
\t            <dt>#34495e</dt>
\t            <dd>Wet asphalt</dd>
\t        </dl>
\t        <dl class=\"palette palette-midnight-blue\">
\t            <dt>#2c3e50</dt>
\t            <dd>Midnight blue</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-sun-flower\">
\t            <dt>#f1c40f</dt>
\t            <dd>Sun flower</dd>
\t        </dl>
\t        <dl class=\"palette palette-orange\">
\t            <dt>#f39c12</dt>
\t            <dd>Orange</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-carrot\">
\t            <dt>#e67e22</dt>
\t            <dd>Carrot</dd>
\t        </dl>
\t        <dl class=\"palette palette-pumpkin\">
\t            <dt>#d35400</dt>
\t            <dd>Pumpkin</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-alizarin\">
\t            <dt>#e74c3c</dt>
\t            <dd>Alizarin</dd>
\t        </dl>
\t        <dl class=\"palette palette-pomegranate\">
\t            <dt>#c0392b</dt>
\t            <dd>Pomegranate</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-clouds\">
\t            <dt>#ecf0f1</dt>
\t            <dd>Clouds</dd>
\t        </dl>
\t        <dl class=\"palette palette-silver\">
\t            <dt>#bdc3c7</dt>
\t            <dd>Silver</dd>
\t        </dl>
\t        </div>
\t        <div class=\"pallete-item\">
\t            <dl class=\"palette palette-concrete\">
\t            <dt>#95a5a6</dt>
\t            <dd>Concrete</dd>
\t        </dl>
\t        <dl class=\"palette palette-asbestos\">
\t            <dt>#7f8c8d</dt>
\t            <dd>Asbestos</dd>
\t        </dl>
\t        </div>
\t    </div> <!-- /swatches items -->
\t    <div class=\"swatches-desc-col\">
\t        <h6 class=\"palette-headline\">SWATCHES</h6>
\t        <p class=\"palette-paragraph\">
\t            Colors &mdash; is almost the most important part of the <strong>Flat UI</strong>. Better to use different shades of provided colors than new.
\t        </p>
\t    </div> <!-- /swatches desc -->
\t</div> <!-- /swatches row -->
\t
\t<h3 class=\"demo-panel-title\">Icons <small>(14)</small></h3>
\t<div class=\"demo-illustrations\">
\t    <div class=\"demo-content\">
\t        <div><img src=\"{{ 'assets/images/icons/svg/toilet-paper.svg'|theme }}\" alt=\"Toilet-Paper\"></div>
\t        <div><img src=\"{{ 'assets/images/icons/svg/gift-box.svg'|theme }}\" alt=\"Gift-Box\"></div>
\t        <div><img src=\"{{ 'assets/images/icons/svg/pencils.svg'|theme }}\" alt=\"Pensils\"></div>
\t        <div><img src=\"{{ 'assets/images/icons/svg/clipboard.svg'|theme }}\" alt=\"Clipboard\"></div>
\t        <div><img src=\"{{ 'assets/images/icons/svg/retina.svg'|theme }}\" alt=\"Retina\"></div>
\t        <div><img src=\"{{ 'assets/images/icons/svg/compas.svg'|theme }}\" alt=\"Compas\"></div>
\t        <div><img src=\"{{ 'assets/images/icons/svg/map.svg'|theme }}\" alt=\"Map\"></div>
\t        <div><img src=\"{{ 'assets/images/icons/svg/chat.svg'|theme }}\" alt=\"Chat\"></div>
\t        <div><img src=\"{{ 'assets/images/icons/svg/mail.svg'|theme }}\" alt=\"Mail\"></div>
\t        <div><img src=\"{{ 'assets/images/icons/svg/book.svg'|theme }}\" alt=\"Book\"></div>
\t        <div><img src=\"{{ 'assets/images/icons/svg/calendar.svg'|theme }}\" alt=\"Calendar\"></div>
\t        <div><img src=\"{{ 'assets/images/icons/svg/paper-bag.svg'|theme }}\" alt=\"Pocket\"></div>
\t        <div><img src=\"{{ 'assets/images/icons/svg/clocks.svg'|theme }}\" alt=\"Watches\"></div>
\t        <div><img src=\"{{ 'assets/images/icons/svg/loop.svg'|theme }}\" alt=\"Infinity-Loop\"></div>
\t    </div>
\t</div>
\t
\t<h3 class=\"demo-panel-title\">Glyphs <small>(70)</small></h3>
\t<div class=\"demo-icons\">
\t    <div class=\"demo-content\">
\t        <span class=\"fui-info-circle\"></span>
\t        <span class=\"fui-alert-circle\"></span>
\t        <span class=\"fui-question-circle\"></span>
\t        <span class=\"fui-check-circle\"></span>
\t        <span class=\"fui-cross-circle\"></span>
\t        <span class=\"fui-plus-circle\"></span>
\t        <span class=\"fui-window\"></span>
\t        <span class=\"fui-windows\"></span>
\t        <span class=\"fui-upload\"></span>
\t        <span class=\"fui-arrow-right\"></span>
\t        <span class=\"fui-arrow-left\"></span>
\t        <span class=\"fui-loop\"></span>
\t        <span class=\"fui-cmd\"></span>
\t        <span class=\"fui-mic\"></span>
\t        <span class=\"fui-export\"></span>
\t        <span class=\"fui-heart\"></span>
\t        <span class=\"fui-location\"></span>
\t        <span class=\"fui-plus\"></span>
\t        <span class=\"fui-check\"></span>
\t        <span class=\"fui-cross\"></span>
\t        <span class=\"fui-list\"></span>
\t        <span class=\"fui-new\"></span>
\t        <span class=\"fui-video\"></span>
\t        <span class=\"fui-photo\"></span>
\t        <span class=\"fui-time\"></span>
\t        <span class=\"fui-eye\"></span>
\t        <span class=\"fui-chat\"></span>
\t        <span class=\"fui-home\"></span>
\t        <span class=\"fui-search\"></span>
\t        <span class=\"fui-user\"></span>
\t        <span class=\"fui-mail\"></span>
\t        <span class=\"fui-lock\"></span>
\t        <span class=\"fui-power\"></span>
\t        <span class=\"fui-star\"></span>
\t        <span class=\"fui-calendar\"></span>
\t        <span class=\"fui-gear\"></span>
\t        <span class=\"fui-bookmark\"></span>
\t        <span class=\"fui-exit\"></span>
\t        <span class=\"fui-trash\"></span>
\t        <span class=\"fui-folder\"></span>
\t        <span class=\"fui-bubble\"></span>
\t        <span class=\"fui-calendar-solid\"></span>
\t        <span class=\"fui-star-2\"></span>
\t        <span class=\"fui-credit-card\"></span>
\t        <span class=\"fui-clip\"></span>
\t        <span class=\"fui-link\"></span>
\t        <span class=\"fui-pause\"></span>
\t        <span class=\"fui-play\"></span>
\t        <span class=\"fui-volume\"></span>
\t        <span class=\"fui-mute\"></span>
\t        <span class=\"fui-resize\"></span>
\t        <span class=\"fui-tag\"></span>
\t        <span class=\"fui-document\"></span>
\t        <span class=\"fui-image\"></span>
\t        <span class=\"fui-triangle-up\"></span>
\t        <span class=\"fui-triangle-up-small\"></span>
\t        <span class=\"fui-triangle-right-large\"></span>
\t        <span class=\"fui-triangle-left-large\"></span>
\t        <span class=\"fui-triangle-down\"></span>
\t        <span class=\"fui-triangle-down-small\"></span>
\t        <span class=\"fui-radio-unchecked\"></span>
\t        <span class=\"fui-radio-checked\"></span>
\t        <span class=\"fui-checkbox-unchecked\"></span>
\t        <span class=\"fui-checkbox-checked\"></span>
\t        <span class=\"fui-list-thumbnailed\"></span>
\t        <span class=\"fui-list-small-thumbnails\"></span>
\t        <span class=\"fui-list-numbered\"></span>
\t        <span class=\"fui-list-large-thumbnails\"></span>
\t        <span class=\"fui-list-columned\"></span>
\t        <span class=\"fui-list-bulleted\"></span>
\t    </div><!-- /.demo-content -->
\t</div><!-- /.demo-icons -->
\t
\t<h3 class=\"demo-panel-title\">Social <small>(27)</small></h3>
\t<div class=\"demo-icons\">
\t    <div class=\"demo-content\">
\t        <span class=\"fui-facebook\"></span>
\t        <span class=\"fui-youtube\"></span>
\t        <span class=\"fui-vimeo\"></span>
\t        <span class=\"fui-twitter\"></span>
\t        <span class=\"fui-stumbleupon\"></span>
\t        <span class=\"fui-spotify\"></span>
\t        <span class=\"fui-skype\"></span>
\t        <span class=\"fui-pinterest\"></span>
\t        <span class=\"fui-path\"></span>
\t        <span class=\"fui-linkedin\"></span>
\t        <span class=\"fui-google-plus\"></span>
\t        <span class=\"fui-dribbble\"></span>
\t        <span class=\"fui-behance\"></span>
\t        <span class=\"fui-yelp\"></span>
\t        <span class=\"fui-wordpress\"></span>
\t        <span class=\"fui-windows-8\"></span>
\t        <span class=\"fui-vine\"></span>
\t        <span class=\"fui-tumblr\"></span>
\t        <span class=\"fui-paypal\"></span>
\t        <span class=\"fui-lastfm\"></span>
\t        <span class=\"fui-instagram\"></span>
\t        <span class=\"fui-html5\"></span>
\t        <span class=\"fui-github\"></span>
\t        <span class=\"fui-foursquare\"></span>
\t        <span class=\"fui-dropbox\"></span>
\t        <span class=\"fui-android\"></span>
\t        <span class=\"fui-apple\"></span>
\t    </div><!-- /.demo-content -->
\t</div><!-- /.demo-icons -->
    
    <h3 class=\"demo-panel-title\">Font Awesome Icons <small>(786)</small></h3>
    {% partial 'fa-all-icons' %}
    
    <br/>

</div>", "/home/vsites/homeschool.in.th/themes/responsiv-flat/pages/ui-elements.htm", "");
    }
}
