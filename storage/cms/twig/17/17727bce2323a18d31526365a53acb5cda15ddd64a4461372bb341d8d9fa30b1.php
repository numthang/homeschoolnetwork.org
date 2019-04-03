<?php

/* /home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/pages/home.htm */
class __TwigTemplate_4c3b570906938e5d6792408100da15803c4188a3c396b802504be8516bcb8828 extends Twig_Template
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
        echo "<section class=\"home-title\">
  <div class=\"container\">
      <div class=\"row\">
          <div class=\"col-sm-5 col-md-5\" style=\"padding-bottom: 20px; border:1px #ddd solid;   border-radius: 10px;
\">
              <h3 style=\"margin:10px;\">เครือข่ายบ้านเรียน</h3><!--ครบเครื่องเรื่องการทำโฮมสคูลในประเทศไทย-->
              <div class=\"signup-form\">
                ";
        // line 8
        if ( !($context["user"] ?? null)) {
            // line 9
            echo "                <form data-request=\"onSignin\">
                  <div class=\"form-group\">
                      <label for=\"userSigninLogin\">";
            // line 11
            echo twig_escape_filter($this->env, ($context["loginAttributeLabel"] ?? null), "html", null, true);
            echo "</label>
                      <input
                          name=\"login\"
                          type=\"text\"
                          class=\"form-control\"
                          id=\"userSigninLogin\"
                          placeholder=\"Enter your ";
            // line 17
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["loginAttributeLabel"] ?? null)), "html", null, true);
            echo "\" />

                      <label for=\"userSigninPassword\">Password</label>
                      <input
                          name=\"password\"
                          type=\"password\"
                          class=\"form-control\"
                          id=\"userSigninPassword\"
                          placeholder=\"Enter your password\" />
                  </div>

                  <button type=\"submit\" style=\"width:225px; height:35px; padding-top: 5px; margin-top:5px;\" class=\"btn  btn-default\">Sign in</button>
                  <a href=\"/flynsarmy/sociallogin/Facebook\"><img src=\"";
            // line 29
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/fb-login.png");
            echo "\" class=\"social-login\"></a>
                  <a href=\"/flynsarmy/sociallogin/Google\"><img src=\"";
            // line 30
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/g-login.png");
            echo "\" class=\"social-login\"></a>
                  <a href=\"/flynsarmy/sociallogin/Twitter\"><img src=\"";
            // line 31
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/t-login.png");
            echo "\" class=\"social-login\"></a>
                </form>
                ";
            // line 33
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("No account ?"));
            echo " <a href=\"/login\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Register"));
            echo "</a>
                ";
        } else {
            // line 35
            echo "                  <p>
                    <div class=\"row\">
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/profile\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/profile.png\" class=\"img-rounded img-responsive feature-icon\"><font style=\"font-size:18px;\">";
            // line 38
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("My profile"));
            echo "</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/new/course\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/Book.png\" class=\"img-rounded img-responsive feature-icon\"><font style=\"font-size:18px;\">";
            // line 41
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("course"));
            echo "</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/new/evaluation\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/Clipboard.png\" class=\"img-rounded img-responsive feature-icon\"><font style=\"font-size:18px;\">";
            // line 44
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Evaluation"));
            echo "</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/new/post\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/Pencils.png\" class=\"img-rounded img-responsive feature-icon\"><font style=\"font-size:18px;\">";
            // line 47
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New post"));
            echo "</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/signout.png\" class=\"img-rounded img-responsive feature-icon\"><font style=\"font-size:18px;\">";
            // line 50
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Sign out"));
            echo "</font></a>
                      </div>
                    </div>
                  </p>
                ";
        }
        // line 55
        echo "              </div>
              <!--<div class=\"additional-links\">
                  By signing up you agree to <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
              </div>-->
          </div>
          <div class=\"col-sm-7 col-md-7\">
            ";
        // line 61
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slide"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 62
        echo "          </div>
      </div>
  </div>
</section>
<br>

<div class=\"container\">
  <!-- Services -->
  <div class=\"row our-services\">
    <div class=\"col-sm-12\">
      <h4 class=\"headline\"><span> HomeschoolNetwork.org ";
        // line 72
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("What we do"));
        echo "</span></h4>
      <p>\"เครือข่ายบ้านเรียน\" เว็บกลางสำหรับสมาชิกบ้านเรียนหรือโฮมสคูลในเมืองไทย สามารถติดต่อ แลกเปลี่ยน หาความรู้ในการทำโฮมสคูล โดยสมาชิกจะสามารถ ค้นฐานข้อมูลสมาชิกบ้านเรียน, เขียนแผนการศึกษาออนไลน์, เขียนแบบประเมินและร่องรอยการเรียนรู้และสามารถร่วมเขียนเนื้อหาหรือบันทึกใดๆ ที่ต้องการแชร์ให้กับสมาชิกบ้านเรียนท่านอื่นๆ หรือบุคคลที่สนใจได้เข้ามาศึกษา เพื่อทำความรู้จักและสร้างกลุ่มบ้านเรียนให้ใหญ่ขึ้นได้ต่อไป</p>
      <div class=\"row\">
          <div class=\"col-sm-4\">
              <div class=\"services\">
                  <div class=\"service-item\">
                      <i class=\"fa fa-vcard\"></i>
                      <div class=\"service-desc\">
                          <h5><a href=\"/login/profile\">";
        // line 80
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("User profile"));
        echo "</a></h5>
                          <p>อย่าลืมกดเข้าไปอัพเดทข้อมูลเกี่ยวกับบ้านเรียนของคุณ เพื่อสร้างเครือข่ายให้ใหญ่ขึ้น ไม่ต้องทนเหงาอีกต่อไป</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class=\"col-sm-4\">
              <div class=\"services\">
                  <div class=\"service-item\">
                      <i class=\"fa fa-book\"></i>
                      <div class=\"service-desc\">
                          <h5><a href=\"/login/new/course\">";
        // line 91
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New course"));
        echo "</a></h5>
                          <p>หากคุณประสบปัญหาในการเขียนรายงาน, การออกแบบการเรียนการสอนและการจัดเรียงเอกสาร
                            สิ่งนี้จะช่วยได้ โดยข้างในจะมีตัวอย่างการเขียนแผนแบบสำเร็จรูปพร้อมใช้งาน </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class=\"col-sm-4\">
              <div class=\"services\">
                  <div class=\"service-item\">
                      <i class=\"fa fa-clipboard\"></i>
                      <div class=\"service-desc\">
                          <h5><a href=\"/login/new/evaluation\">";
        // line 103
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New evaluation"));
        echo "</a></h5>
                          <p>ทุกปี จะมีเทศกาลปั่นรายงาน ส่วนนี้จะเป็นส่วนของการทำรายงานประเมินผล ท่านสามารถอัพเดทร่องรอยการเรียนรู้ของนักเรียนได้เรื่อยๆ ตลอดปี โดยไม่ต้องดองงานมาทำก่อนจบเทอม </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"services\">
                <div class=\"service-item\">
                    <i class=\"fa fui-new\"></i>
                    <div class=\"service-desc\">
                        <h5><a href=\"/login/new/post\">";
        // line 116
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New post"));
        echo "</a></h5>
                        <p>นอกเหนือจากงานเขียนที่ต้องส่งเขตแล้ว ท่านยังสามารถช่วยเหลือชุมชนด้วยการเขียนบทความหรืออะไรก็ได้สั้นๆ แสดงบนหน้าเว็บ เพื่อเป็นวิทยาทานแก่คนอื่นต่อไป</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"services\">
                <div class=\"service-item\">
                    <i class=\"fa fa-cloud\"></i>
                    <div class=\"service-desc\">
                        <h5><a href=\"/cloud\">";
        // line 127
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Homeschooler cloud"));
        echo "</a></h5>
                        <p>มีใครทำบ้านเรียนในพื้นที่บ้าง เชื่อว่าเป็นคำถามแรกๆ ในใจหลังจากที่คิดจะทำโฮมสคูล ไปค้นหาเพื่อนบ้านโฮมสคูลในพื้นที่ของคุณกันเลย</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"services\">
                <div class=\"service-item\">
                    <i class=\"fa fa-question-circle-o\"></i>
                    <div class=\"service-desc\">
                        <h5><a href=\"/blog/59\">";
        // line 138
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("FAQ"));
        echo "</a></h5>
                        <p>คำถามที่พบบ่อย ที่ได้รับการรวบรวมจากสมาชิกหลายท่านจากหลายแหล่ง เช่น เริ่มต้นโฮมสคูลทำอย่างไร บ้านต้องรวยหรือเปล่า เป็นต้น</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 147
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("ads/bottom"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 148
        echo "  <div class=\"row our-team\">
    <div class=\"col-sm-8\">
      <h4 class=\"headline\"><span>";
        // line 150
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Our team"));
        echo "</span></h4>
      <div class=\"row\">
        <div class=\"col-sm-4 col-xs-4\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/528931910/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/2';\">
            <div class=\"info\">
              Unnop Sricharoenchai
              <p class=\"text-muted\">Administrator & Programmer</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4 col-xs-4\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/100000122460462/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/12';\">
            <div class=\"info\">
              Patai Wonganutrohd
              <p class=\"text-muted\">Administrator & Writer</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4 col-xs-4\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/100001891270373/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/10';\">
            <div class=\"info\">
              Joompot Sriyapan
              <p class=\"text-muted\">Writer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-sm-4\">
      <h4 class=\"headline\"><span>Find Us on Facebook</span></h4>
      <div class=\"fb-page\"
      data-href=\"https://www.facebook.com/HomeschoolNetwork\"
      data-hide-cover=\"false\"
      data-show-facepile=\"true\"
      data-adapt-container-width=\"true\"></div>
    </div>
  </div>
  <!--<div class=\"recent-tweets\">
      <h4 class=\"headline\"><span>Recent tweets</span></h4>
      <div class=\"tweet\">
          <i class=\"fa fa-twitter\"></i>
          <p>
              Salami turkey jowl rump jerky ball tip drumstick ground round tenderloin kielbasa hamburger prosciutto.
              <a href=\"#\">1 day ago</a>
          </p>
      </div>
      <div class=\"tweet\">
          <i cl#recent tweet
ass=\"fa fa-twitter\"></i>
          <p>
              Short loin pork belly beef, tenderloin swine ribeye tri-tip doner salami rump hamburger.
              <a href=\"#\">2 days ago</a>
          </p>
      </div>
  </div>-->
</div>

<br />";
    }

    public function getTemplateName()
    {
        return "/home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 150,  243 => 148,  239 => 147,  227 => 138,  213 => 127,  199 => 116,  183 => 103,  168 => 91,  154 => 80,  143 => 72,  131 => 62,  127 => 61,  119 => 55,  111 => 50,  105 => 47,  99 => 44,  93 => 41,  87 => 38,  82 => 35,  75 => 33,  70 => 31,  66 => 30,  62 => 29,  47 => 17,  38 => 11,  34 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"home-title\">
  <div class=\"container\">
      <div class=\"row\">
          <div class=\"col-sm-5 col-md-5\" style=\"padding-bottom: 20px; border:1px #ddd solid;   border-radius: 10px;
\">
              <h3 style=\"margin:10px;\">เครือข่ายบ้านเรียน</h3><!--ครบเครื่องเรื่องการทำโฮมสคูลในประเทศไทย-->
              <div class=\"signup-form\">
                {% if not user %}
                <form data-request=\"onSignin\">
                  <div class=\"form-group\">
                      <label for=\"userSigninLogin\">{{ loginAttributeLabel }}</label>
                      <input
                          name=\"login\"
                          type=\"text\"
                          class=\"form-control\"
                          id=\"userSigninLogin\"
                          placeholder=\"Enter your {{ loginAttributeLabel|lower }}\" />

                      <label for=\"userSigninPassword\">Password</label>
                      <input
                          name=\"password\"
                          type=\"password\"
                          class=\"form-control\"
                          id=\"userSigninPassword\"
                          placeholder=\"Enter your password\" />
                  </div>

                  <button type=\"submit\" style=\"width:225px; height:35px; padding-top: 5px; margin-top:5px;\" class=\"btn  btn-default\">Sign in</button>
                  <a href=\"/flynsarmy/sociallogin/Facebook\"><img src=\"{{ 'assets/images/fb-login.png'|theme }}\" class=\"social-login\"></a>
                  <a href=\"/flynsarmy/sociallogin/Google\"><img src=\"{{ 'assets/images/g-login.png'|theme }}\" class=\"social-login\"></a>
                  <a href=\"/flynsarmy/sociallogin/Twitter\"><img src=\"{{ 'assets/images/t-login.png'|theme }}\" class=\"social-login\"></a>
                </form>
                {{ 'No account ?'|_ }} <a href=\"/login\">{{ 'Register'|_ }}</a>
                {% else %}
                  <p>
                    <div class=\"row\">
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/profile\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/profile.png\" class=\"img-rounded img-responsive feature-icon\"><font style=\"font-size:18px;\">{{ 'My profile'|_ }}</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/new/course\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/Book.png\" class=\"img-rounded img-responsive feature-icon\"><font style=\"font-size:18px;\">{{ 'course'|_ }}</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/new/evaluation\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/Clipboard.png\" class=\"img-rounded img-responsive feature-icon\"><font style=\"font-size:18px;\">{{ 'Evaluation'|_ }}</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"/login/new/post\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/Pencils.png\" class=\"img-rounded img-responsive feature-icon\"><font style=\"font-size:18px;\">{{ 'New post'|_ }}</font></a>
                      </div>
                      <div class=\"col-md-4 col-sm-6 col-xs-6\" align=\"center\">
                        <a href=\"javascript:void(0);\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"><img src=\"/themes/responsiv-flat/assets/images/icons/png/signout.png\" class=\"img-rounded img-responsive feature-icon\"><font style=\"font-size:18px;\">{{ 'Sign out'|_ }}</font></a>
                      </div>
                    </div>
                  </p>
                {% endif %}
              </div>
              <!--<div class=\"additional-links\">
                  By signing up you agree to <a href=\"#\">Terms of Use</a> and <a href=\"#\">Privacy Policy</a>
              </div>-->
          </div>
          <div class=\"col-sm-7 col-md-7\">
            {% partial 'slide' %}
          </div>
      </div>
  </div>
</section>
<br>

<div class=\"container\">
  <!-- Services -->
  <div class=\"row our-services\">
    <div class=\"col-sm-12\">
      <h4 class=\"headline\"><span> HomeschoolNetwork.org {{ 'What we do'|_ }}</span></h4>
      <p>\"เครือข่ายบ้านเรียน\" เว็บกลางสำหรับสมาชิกบ้านเรียนหรือโฮมสคูลในเมืองไทย สามารถติดต่อ แลกเปลี่ยน หาความรู้ในการทำโฮมสคูล โดยสมาชิกจะสามารถ ค้นฐานข้อมูลสมาชิกบ้านเรียน, เขียนแผนการศึกษาออนไลน์, เขียนแบบประเมินและร่องรอยการเรียนรู้และสามารถร่วมเขียนเนื้อหาหรือบันทึกใดๆ ที่ต้องการแชร์ให้กับสมาชิกบ้านเรียนท่านอื่นๆ หรือบุคคลที่สนใจได้เข้ามาศึกษา เพื่อทำความรู้จักและสร้างกลุ่มบ้านเรียนให้ใหญ่ขึ้นได้ต่อไป</p>
      <div class=\"row\">
          <div class=\"col-sm-4\">
              <div class=\"services\">
                  <div class=\"service-item\">
                      <i class=\"fa fa-vcard\"></i>
                      <div class=\"service-desc\">
                          <h5><a href=\"/login/profile\">{{ 'User profile'|_ }}</a></h5>
                          <p>อย่าลืมกดเข้าไปอัพเดทข้อมูลเกี่ยวกับบ้านเรียนของคุณ เพื่อสร้างเครือข่ายให้ใหญ่ขึ้น ไม่ต้องทนเหงาอีกต่อไป</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class=\"col-sm-4\">
              <div class=\"services\">
                  <div class=\"service-item\">
                      <i class=\"fa fa-book\"></i>
                      <div class=\"service-desc\">
                          <h5><a href=\"/login/new/course\">{{ 'New course'|_ }}</a></h5>
                          <p>หากคุณประสบปัญหาในการเขียนรายงาน, การออกแบบการเรียนการสอนและการจัดเรียงเอกสาร
                            สิ่งนี้จะช่วยได้ โดยข้างในจะมีตัวอย่างการเขียนแผนแบบสำเร็จรูปพร้อมใช้งาน </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class=\"col-sm-4\">
              <div class=\"services\">
                  <div class=\"service-item\">
                      <i class=\"fa fa-clipboard\"></i>
                      <div class=\"service-desc\">
                          <h5><a href=\"/login/new/evaluation\">{{ 'New evaluation'|_ }}</a></h5>
                          <p>ทุกปี จะมีเทศกาลปั่นรายงาน ส่วนนี้จะเป็นส่วนของการทำรายงานประเมินผล ท่านสามารถอัพเดทร่องรอยการเรียนรู้ของนักเรียนได้เรื่อยๆ ตลอดปี โดยไม่ต้องดองงานมาทำก่อนจบเทอม </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"services\">
                <div class=\"service-item\">
                    <i class=\"fa fui-new\"></i>
                    <div class=\"service-desc\">
                        <h5><a href=\"/login/new/post\">{{ 'New post'|_ }}</a></h5>
                        <p>นอกเหนือจากงานเขียนที่ต้องส่งเขตแล้ว ท่านยังสามารถช่วยเหลือชุมชนด้วยการเขียนบทความหรืออะไรก็ได้สั้นๆ แสดงบนหน้าเว็บ เพื่อเป็นวิทยาทานแก่คนอื่นต่อไป</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"services\">
                <div class=\"service-item\">
                    <i class=\"fa fa-cloud\"></i>
                    <div class=\"service-desc\">
                        <h5><a href=\"/cloud\">{{ 'Homeschooler cloud'|_ }}</a></h5>
                        <p>มีใครทำบ้านเรียนในพื้นที่บ้าง เชื่อว่าเป็นคำถามแรกๆ ในใจหลังจากที่คิดจะทำโฮมสคูล ไปค้นหาเพื่อนบ้านโฮมสคูลในพื้นที่ของคุณกันเลย</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"services\">
                <div class=\"service-item\">
                    <i class=\"fa fa-question-circle-o\"></i>
                    <div class=\"service-desc\">
                        <h5><a href=\"/blog/59\">{{ 'FAQ'|_ }}</a></h5>
                        <p>คำถามที่พบบ่อย ที่ได้รับการรวบรวมจากสมาชิกหลายท่านจากหลายแหล่ง เช่น เริ่มต้นโฮมสคูลทำอย่างไร บ้านต้องรวยหรือเปล่า เป็นต้น</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  {% partial \"ads/bottom\" %}
  <div class=\"row our-team\">
    <div class=\"col-sm-8\">
      <h4 class=\"headline\"><span>{{ 'Our team'|_ }}</span></h4>
      <div class=\"row\">
        <div class=\"col-sm-4 col-xs-4\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/528931910/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/2';\">
            <div class=\"info\">
              Unnop Sricharoenchai
              <p class=\"text-muted\">Administrator & Programmer</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4 col-xs-4\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/100000122460462/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/12';\">
            <div class=\"info\">
              Patai Wonganutrohd
              <p class=\"text-muted\">Administrator & Writer</p>
            </div>
          </div>
        </div>
        <div class=\"col-sm-4 col-xs-4\">
          <div class=\"team-member text-center\">
            <img class=\"img-responsive center-block\" src=\"https://graph.facebook.com/100001891270373/picture?type=normal\" alt=\"\" style=\"cursor:pointer; border-radius: 200px;\" onClick=\"window.location.href = '/user/profile/10';\">
            <div class=\"info\">
              Joompot Sriyapan
              <p class=\"text-muted\">Writer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-sm-4\">
      <h4 class=\"headline\"><span>Find Us on Facebook</span></h4>
      <div class=\"fb-page\"
      data-href=\"https://www.facebook.com/HomeschoolNetwork\"
      data-hide-cover=\"false\"
      data-show-facepile=\"true\"
      data-adapt-container-width=\"true\"></div>
    </div>
  </div>
  <!--<div class=\"recent-tweets\">
      <h4 class=\"headline\"><span>Recent tweets</span></h4>
      <div class=\"tweet\">
          <i class=\"fa fa-twitter\"></i>
          <p>
              Salami turkey jowl rump jerky ball tip drumstick ground round tenderloin kielbasa hamburger prosciutto.
              <a href=\"#\">1 day ago</a>
          </p>
      </div>
      <div class=\"tweet\">
          <i cl#recent tweet
ass=\"fa fa-twitter\"></i>
          <p>
              Short loin pork belly beef, tenderloin swine ribeye tri-tip doner salami rump hamburger.
              <a href=\"#\">2 days ago</a>
          </p>
      </div>
  </div>-->
</div>

<br />", "/home/tee/domains/homeschoolnetwork.org/public_html/themes/responsiv-flat/pages/home.htm", "");
    }
}
