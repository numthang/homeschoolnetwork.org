<?php

/* /home/vsites/homeschoolnetwork.org/plugins/numthang/homeschool/components/courseform/default.htm */
class __TwigTemplate_e884cdd7ac96718766c8ece52218bf044df252ac4b2266573e42430722106d7a extends Twig_Template
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
        $context["courses"] = twig_get_attribute($this->env, $this->source, ($context["courses"] ?? null), "courses", array());
        // line 2
        echo "
<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<label>";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Courses"));
        echo " </label>
\t\t<div class=\"btn-group\" style=\"width:100%;\">
\t\t\t<button data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\" type=\"button\" style=\"width:100%; text-align:left;\">&nbsp; <span class=\"fui-new\"></span> ";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Select Course"));
        echo " <span class=\"caret\"></span></button>
\t\t\t<ul role=\"menu\" class=\"dropdown-menu\" style=\"width:100%;\">
\t\t\t\t<li><a href=\"/login/new/course\"><span class=\"fui-new\"></span>&nbsp; ";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New Course"));
        echo "</a></li>
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 11
            echo "\t\t\t\t<li><a href=\"/login/edit/course/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", array()), "html", null, true);
            echo "\"> <span class=\"fui-new\"></span>&nbsp;
\t\t\t\t\t";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["c"], "template", array())) {
                // line 13
                echo "\t\t\t\t\t\t[ ";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Template"));
                echo " ]
\t\t\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t\t\t[ ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "created_at", array()), "m/d/Y"), "html", null, true);
                echo " ]
\t\t\t\t\t";
            }
            // line 16
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>

<script src=\"https://code.jquery.com/jquery-1.9.1.min.js\"></script>
<link id=\"bsdp-css\" href=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/css/bootstrap-datepicker3.min.css\" rel=\"stylesheet\">
<script src=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script type=\"text/javascript\">
\$.fn.datepicker.defaults.format = \"dd/mm/yyyy\";
</script>
<script src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
<form data-request=\"onSave\">
  <input type=\"hidden\" name=\"user_id\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"row\">
    <div class=\"col-sm-6\">
      <div class=\"form-group ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method")) {
            echo " has-error ";
        }
        echo "\">
        <label>ชื่อแผนการศึกษา</label>
        <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Enter course name : ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", array()), "html", null, true);
        echo "\">
        ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method")) {
            echo "<div class=\"alert alert-warning\" style=\"margin-top:4px;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 39
        echo "      </div>
    </div>
    <div class=\"col-sm-6\">
      <div class=\"form-group ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "hs_name"), "method")) {
            echo " has-error ";
        }
        echo "\">
        <label>ชื่อบ้านเรียน</label>
        <input type=\"text\" class=\"form-control\" name=\"hs_name\" placeholder=\"Enter homeschool name : \" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "hs_name", array()), "html", null, true);
        echo "\">
        ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "hs_name"), "method")) {
            echo "<div class=\"alert alert-warning\" style=\"margin-top:4px;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "hs_name"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 46
        echo "      </div>
    </div>
  </div>
  <div class=\"board-inner\">
    <div class=\"accordion\">
      <dl>
\t\t\t\t<dt><a href=\"#\" class=\"accordionTitle\">0. ปก</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"cover\" placeholder=\"\" rows=\"43\">";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "cover", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "cover", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["default_0"] ?? null) : null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a class=\"accordionTitle\" href=\"#\">1. ข้อมูลพื้นฐานของครอบครัว</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label>บิดา</label>
                <input type=\"text\" class=\"form-control\" name=\"father_name\" placeholder=\"Enter father's name\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_name", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-8\">
              <div class=\"form-group\">
                <label>วุฒิการศึกษา</label>
                <input type=\"text\" class=\"form-control\" name=\"father_degree\" placeholder=\"Enter father's degree\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_degree", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>ประสบการณ์</label>
                <textarea class=\"form-control\" name=\"father_exp\" placeholder=\"Enter father's experience\" rows=\"5\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_exp", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
            <div class=\"col-sm-2\">
              <div class=\"form-group\">
                <label>อายุ</label>
                <input type=\"text\" class=\"form-control\" name=\"father_age\" placeholder=\"Age\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_age", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-10\">
              <div class=\"form-group\">
                <label>อาชีพ</label>
                <input type=\"text\" class=\"form-control\" name=\"father_job\" placeholder=\"Enter father's job\"  value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_job", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>ที่อยู่</label>
                <input type=\"text\" class=\"form-control\" name=\"father_addr\" placeholder=\"Enter father's address\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_addr", array()), "html", null, true);
        echo "\">
              </div>
            </div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>ติดต่อ</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"father_contact\" placeholder=\"Email address or phone number\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_contact", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label>มารดา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_name\" placeholder=\"Enter mother's name\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_name", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-8\">
              <div class=\"form-group\">
                <label>วุฒิการศึกษา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_degree\" placeholder=\"Enter mother's degree\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_degree", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>ประสบการณ์</label>
                <textarea class=\"form-control\" name=\"mother_exp\" placeholder=\"Enter mother's experience\" rows=\"5\">";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_exp", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
            <div class=\"col-sm-2\">
              <div class=\"form-group\">
                <label>อายุ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_age\" placeholder=\"Age\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_age", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-10\">
              <div class=\"form-group\">
                <label>อาชีพ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_job\" placeholder=\"Enter mother's job\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_job", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>ที่อยู่</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_addr\" placeholder=\"Enter mother's address\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_addr", array()), "html", null, true);
        echo "\">
              </div>
            </div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>ติดต่อ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_contact\" placeholder=\"Email address or phone number\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_contact", array()), "html", null, true);
        echo "\">
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">2. ข้อมูลพื้นฐานของผู้เรียน</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          2.1 ระบุข้อมูลของผู้เรียน
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>ชื่อ-สกุล</label>
                <input type=\"text\" class=\"form-control\" name=\"student_name\" placeholder=\"Enter student's name\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "student_name", array()), "html", null, true);
        echo "\">
              </div>
            </div>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>เพศ</label>
\t\t\t\t\t\t\t\t<select class=\"form-control select select-primary\" data-toggle=\"select\" name=\"gender\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 166
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Gender"));
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 167
        echo (((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "gender", array()) == 1)) ? ("selected") : (""));
        echo ">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Male"));
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 168
        echo (((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "gender", array()) == 2)) ? ("selected") : (""));
        echo ">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Female"));
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\" ";
        // line 169
        echo (((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "gender", array()) == 3)) ? ("selected") : (""));
        echo ">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Other"));
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
            <div class=\"col-sm-3\">
              <div class=\"form-group\">
                <label>วัน เดือน ปี เกิด</label>
                <div class=\"input-group date\" data-provide=\"datepicker\">
                  <input type=\"text\" class=\"form-control\" name=\"birth_date\" value=\"";
        // line 177
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "birt_date", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "birth_date", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
            echo " ";
        }
        echo "\">
                    <div class=\"input-group-addon\">
                      <span class=\"fui-calendar\"></span>
                    </div>
                </div>
              </div>
            </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>ประวัติการศึกษา (กรณีเรียนในระบบโรงเรียนมาก่อน)</label>
                <textarea class=\"form-control\" name=\"school_exp\" placeholder=\"Enter school's experience\" rows=\"5\">";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "school_exp", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
          2.2 พัฒนาการของผู้เรียน (ระบุการพัฒนาการของผู้เรียน/ความสามารถพิเศษ/ความ
    ต้องการพิเศษ)
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"development\" placeholder=\"พัฒนาการตามวัย, พัฒนาการตามความสามารถพิเศษ หรือ พัฒนาการตามความตองการพิเศษ\" rows=\"10\">";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "development", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">3. ระดับที่จัดการศึกษา / เหตุผลในการจัดการศึกษาของครอบครัว</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"class_reason\" placeholder=\"ระดับชั้น เช่น ประถมศึกษา (ชั้น ป.1 – ป.3) เหตุผลในการจัดการศึกษาของครอบครัว\" rows=\"20\">";
        // line 208
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "class_reason", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "class_reason", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["default_3"] ?? null) : null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">4. จุดมุ่งหมายของการจัดการศึกษา</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
          <div class=\"col-sm-12\">
            <div class=\"form-group\" style=\"padding:2px;\">
              <textarea class=\"form-control my-editor\" name=\"purpose\" placeholder=\"ระบุความต้องการ เช่น ต้องการพึ่งตนเอง ลดค่าใช้จ่าย เป็นต้น\" rows=\"20\">";
        // line 218
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "purpose", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "purpose", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["default_4"] ?? null) : null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
            </div>
          </div>
        </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">5. รูปแบบการจัดการศึกษา</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"format\" placeholder=\"\" rows=\"20\">";
        // line 228
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "edu_type", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "format", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["default_5"] ?? null) : null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">6. โครงสร้างเวลาเรียน</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control my-editor\" name=\"schedule\" placeholder=\"\" rows=\"20\">";
        // line 238
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "schedule", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "schedule", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["default_6"] ?? null) : null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
                <!--<textarea class=\"form-control\" name=\"schedule\" placeholder=\"กลุ่มประสบการณ์ /กลุ่มสาระการเรียนรู้ (ตามตารางในข้อ 7)\" rows=\"20\">";
        // line 239
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "schedule", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "schedule", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
        }
        echo "</textarea>-->
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">7. การจัดกลุ่มสาระการเรียนรู้ /กลุ่มประสบการณ์</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"curriculum\" placeholder=\"\" rows=\"20\">";
        // line 249
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "curriculum", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "curriculum", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["default_7"] ?? null) : null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">8. การจัดกิจกรรมพัฒนาผู้เรียน</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"activity\" placeholder=\"\" rows=\"20\">";
        // line 259
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "activity", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "activity", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["default_8"] ?? null) : null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">9. การจัดกระบวนการเรียนรู้</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"learning\" placeholder=\"\" rows=\"20\">";
        // line 269
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "learning", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "learning", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["default_9"] ?? null) : null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">10. การวัดและประเมินผลการเรียนรู้</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"evaluate\" placeholder=\"\" rows=\"20\">";
        // line 279
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "evaluate", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "evaluate", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["default_10"] ?? null) : null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">11. อื่นๆ (ครอบครัวสามารถเพิ่มเติมรายละเอียดที่เห็นว่าเป็นประโยชน์ต่อผู้เรียนได้)</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"other\" placeholder=\"\" rows=\"20\">";
        // line 289
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "other", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
      </dl>
    </div>
    <div class=\"clearfix\"></div>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6\">
\t\t\t<style>
\t\t\t\t.float{
\t\t\t\t\tposition:fixed;
\t\t\t\t\twidth:50px;
\t\t\t\t\theight:50px;
\t\t\t\t\tbottom:40px;
\t\t\t\t\tright:40px;
\t\t\t\t\ttext-align:center;
\t\t\t\t\tbox-shadow: 5px 5px 10px #999;
\t\t\t\t}
\t\t\t\t.float2{
\t\t\t\t\tposition:fixed;
\t\t\t\t\twidth:50px;
\t\t\t\t\theight:50px;
\t\t\t\t\tbottom:100px;
\t\t\t\t\tright:40px;
\t\t\t\t\ttext-align:center;
\t\t\t\t\tbox-shadow: 5px 5px 10px #999;
\t\t\t\t}
\t\t\t</style>
    \t<input type=\"hidden\" name=\"save_as\" value=\"0\">

\t\t\t<button type=\"button\" title=\"";
        // line 322
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Preview"));
        echo "\" class=\"btn btn-lg btn-info fa fa-eye float2\" onClick=\"window.open('/user/course/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", array()), "id", array()), "html", null, true);
        echo "', '_blank');\"></button>
\t\t\t";
        // line 323
        if (((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "template", array()) == 0) || call_user_func_array($this->env->getFunction('can')->getCallable(), array("edit_course_template")))) {
            // line 324
            echo "    \t\t<button type=\"submit\" class=\"btn btn-lg btn-default\" data-hotkey=\"ctrl+s, cmd+s\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Save"));
            echo "</button>
\t\t\t\t<button type=\"submit\" title=\"";
            // line 325
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Save"));
            echo "\" class=\"btn btn-lg btn-default fa fa-save float\" data-hotkey=\"ctrl+s, cmd+s\"></button>
    \t";
        }
        // line 327
        echo "    \t";
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", array(), "any", true, true)) {
            // line 328
            echo "\t\t    <button type=\"submit\" class=\"btn btn-lg btn-info\" onClick=\"if(confirm('";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Save as"));
            echo " '+this.form.name.value)) this.form.save_as.value = 1; else return false;\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Save as"));
            echo " ...</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-lg btn-info\" onClick=\"window.open('/user/course/";
            // line 329
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", array()), "id", array()), "html", null, true);
            echo "', '_blank');\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Preview"));
            echo " </button>
\t\t\t\t<button type=\"button\" class=\"btn btn-lg btn-info\" onClick=\"window.open('/user/course/";
            // line 330
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", array()), "id", array()), "html", null, true);
            echo "?print=1', '_blank');\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Print to PDF"));
            echo " </button>
\t\t\t\t";
            // line 331
            if (((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "template", array()) == 0) || call_user_func_array($this->env->getFunction('can')->getCallable(), array("edit_course_template")))) {
                // line 332
                echo "\t\t\t\t  <button type=\"button\" data-request=\"onDelete\" data-request-confirm=\"Are you sure?\" class=\"btn btn-lg btn-danger\">";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Remove"));
                echo "</button>
\t\t    ";
            }
            // line 334
            echo "\t    ";
        }
        // line 335
        echo "    </div>
  </div>
  <br>
</form><script src=\"";
        // line 338
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/js/accordion.js"));
        echo "\"></script>
<script>
\tvar editor_config = {
\t\tpath_absolute : \"/\",
\t\tselector: \"textarea.my-editor\",
\t\tplugins: [
\t\t\t\"advlist autolink lists link image charmap print preview hr anchor pagebreak\",
\t\t\t\"searchreplace wordcount visualblocks visualchars code fullscreen\",
\t\t\t\"insertdatetime media nonbreaking save table contextmenu directionality\",
\t\t\t\"emoticons template paste textcolor colorpicker textpattern\"
\t\t],
\t\ttoolbar: \"fontsizeselect forecolor | bold italic underline | alignleft aligncenter alignright | bullist numlist indent outdent table | image media | removeformat\",
\t\ttemplates: [
\t\t\t{title: 'Some title 1', description: 'Some desc 1', content: 'My content'},
\t\t\t{title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
\t\t],
\t\tsetup : function(ed)
    {
        ed.on('init', function()
        {
            this.getDoc().body.style.fontSize = '16px';
            this.getDoc().body.style.fontFamily = 'Arial, Tahoma, Sarabun';
        });
    },
\t\trelative_urls: false,
\t\tforce_br_newlines : true,
\t\tforce_p_newlines : false,
\t\tforced_root_block : '',
\t\tfile_browser_callback : function(field_name, url, type, win) {
\t\t\tvar x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
\t\t\tvar y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

\t\t\tvar cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
\t\t\tif (type == 'image') {
\t\t\t\tcmsURL = cmsURL + \"&type=Images\";
\t\t\t} else {
\t\t\t\tcmsURL = cmsURL + \"&type=Files\";
\t\t\t}

\t\t\ttinyMCE.activeEditor.windowManager.open({
\t\t\t\tfile : cmsURL,
\t\t\t\ttitle : 'Filemanager',
\t\t\t\twidth : x * 0.8,
\t\t\t\theight : y * 0.8,
\t\t\t\tresizable : \"yes\",
\t\t\t\tclose_previous : \"no\"
\t\t\t});
\t\t}
\t};
\ttinymce.init(editor_config);
</script>
";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschoolnetwork.org/plugins/numthang/homeschool/components/courseform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  664 => 338,  659 => 335,  656 => 334,  650 => 332,  648 => 331,  642 => 330,  636 => 329,  629 => 328,  626 => 327,  621 => 325,  616 => 324,  614 => 323,  608 => 322,  572 => 289,  551 => 279,  530 => 269,  509 => 259,  488 => 249,  469 => 239,  457 => 238,  436 => 228,  415 => 218,  394 => 208,  381 => 198,  369 => 189,  346 => 177,  333 => 169,  327 => 168,  321 => 167,  317 => 166,  307 => 159,  292 => 147,  283 => 141,  274 => 135,  265 => 129,  256 => 123,  247 => 117,  238 => 111,  228 => 104,  219 => 98,  210 => 92,  201 => 86,  192 => 80,  183 => 74,  174 => 68,  152 => 57,  139 => 46,  133 => 45,  129 => 44,  122 => 42,  117 => 39,  111 => 38,  105 => 37,  98 => 35,  92 => 32,  77 => 19,  67 => 16,  61 => 15,  55 => 13,  53 => 12,  48 => 11,  44 => 10,  40 => 9,  35 => 7,  30 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  set courses = courses.courses %}

<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<label>{{ 'Courses'|_ }} </label>
\t\t<div class=\"btn-group\" style=\"width:100%;\">
\t\t\t<button data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\" type=\"button\" style=\"width:100%; text-align:left;\">&nbsp; <span class=\"fui-new\"></span> {{ 'Select Course'|_ }} <span class=\"caret\"></span></button>
\t\t\t<ul role=\"menu\" class=\"dropdown-menu\" style=\"width:100%;\">
\t\t\t\t<li><a href=\"/login/new/course\"><span class=\"fui-new\"></span>&nbsp; {{ 'New Course'|_ }}</a></li>
\t\t\t\t{% for c in courses %}
\t\t\t\t<li><a href=\"/login/edit/course/{{ c.id }}\"> <span class=\"fui-new\"></span>&nbsp;
\t\t\t\t\t{% if c.template %}
\t\t\t\t\t\t[ {{ 'Template'|_ }} ]
\t\t\t\t\t{% else %}
\t\t\t\t\t\t[ {{ c.created_at|date(\"m/d/Y\") }} ]
\t\t\t\t\t{% endif %} {{ c.name }}</a></li>
\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t</div>
</div>

<script src=\"https://code.jquery.com/jquery-1.9.1.min.js\"></script>
<link id=\"bsdp-css\" href=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/css/bootstrap-datepicker3.min.css\" rel=\"stylesheet\">
<script src=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script type=\"text/javascript\">
\$.fn.datepicker.defaults.format = \"dd/mm/yyyy\";
</script>
<script src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
<form data-request=\"onSave\">
  <input type=\"hidden\" name=\"user_id\" value=\"{{ user.id }}\">
  <div class=\"row\">
    <div class=\"col-sm-6\">
      <div class=\"form-group {% if errors.first('name') %} has-error {% endif %}\">
        <label>ชื่อแผนการศึกษา</label>
        <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Enter course name : {{ errors.first('name') }}\" value=\"{{ record.name }}\">
        {% if errors.first('name') %}<div class=\"alert alert-warning\" style=\"margin-top:4px;\">{{ errors.first('name') }}</div>{% endif %}
      </div>
    </div>
    <div class=\"col-sm-6\">
      <div class=\"form-group {% if errors.first('hs_name') %} has-error {% endif %}\">
        <label>ชื่อบ้านเรียน</label>
        <input type=\"text\" class=\"form-control\" name=\"hs_name\" placeholder=\"Enter homeschool name : \" value=\"{{ record.hs_name }}\">
        {% if errors.first('hs_name') %}<div class=\"alert alert-warning\" style=\"margin-top:4px;\">{{ errors.first('hs_name') }}</div>{% endif %}
      </div>
    </div>
  </div>
  <div class=\"board-inner\">
    <div class=\"accordion\">
      <dl>
\t\t\t\t<dt><a href=\"#\" class=\"accordionTitle\">0. ปก</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"cover\" placeholder=\"\" rows=\"43\">{% if record.cover is defined %} {{ record.cover }} {% else %} {{ this.page['default_0'] }} {% endif %}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a class=\"accordionTitle\" href=\"#\">1. ข้อมูลพื้นฐานของครอบครัว</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label>บิดา</label>
                <input type=\"text\" class=\"form-control\" name=\"father_name\" placeholder=\"Enter father's name\" value=\"{{ this.page.father_name }}\">
              </div>
            </div>
            <div class=\"col-sm-8\">
              <div class=\"form-group\">
                <label>วุฒิการศึกษา</label>
                <input type=\"text\" class=\"form-control\" name=\"father_degree\" placeholder=\"Enter father's degree\" value=\"{{ this.page.father_degree }}\">
              </div>
            </div>
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>ประสบการณ์</label>
                <textarea class=\"form-control\" name=\"father_exp\" placeholder=\"Enter father's experience\" rows=\"5\">{{ this.page.father_exp }}</textarea>
              </div>
            </div>
            <div class=\"col-sm-2\">
              <div class=\"form-group\">
                <label>อายุ</label>
                <input type=\"text\" class=\"form-control\" name=\"father_age\" placeholder=\"Age\" value=\"{{ this.page.father_age }}\">
              </div>
            </div>
            <div class=\"col-sm-10\">
              <div class=\"form-group\">
                <label>อาชีพ</label>
                <input type=\"text\" class=\"form-control\" name=\"father_job\" placeholder=\"Enter father's job\"  value=\"{{ this.page.father_job }}\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>ที่อยู่</label>
                <input type=\"text\" class=\"form-control\" name=\"father_addr\" placeholder=\"Enter father's address\" value=\"{{ this.page.father_addr }}\">
              </div>
            </div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>ติดต่อ</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"father_contact\" placeholder=\"Email address or phone number\" value=\"{{ this.page.father_contact }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label>มารดา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_name\" placeholder=\"Enter mother's name\" value=\"{{ this.page.mother_name }}\">
              </div>
            </div>
            <div class=\"col-sm-8\">
              <div class=\"form-group\">
                <label>วุฒิการศึกษา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_degree\" placeholder=\"Enter mother's degree\" value=\"{{ this.page.mother_degree }}\">
              </div>
            </div>
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>ประสบการณ์</label>
                <textarea class=\"form-control\" name=\"mother_exp\" placeholder=\"Enter mother's experience\" rows=\"5\">{{ this.page.mother_exp }}</textarea>
              </div>
            </div>
            <div class=\"col-sm-2\">
              <div class=\"form-group\">
                <label>อายุ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_age\" placeholder=\"Age\" value=\"{{ this.page.mother_age }}\">
              </div>
            </div>
            <div class=\"col-sm-10\">
              <div class=\"form-group\">
                <label>อาชีพ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_job\" placeholder=\"Enter mother's job\" value=\"{{ this.page.mother_job }}\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>ที่อยู่</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_addr\" placeholder=\"Enter mother's address\" value=\"{{ this.page.mother_addr }}\">
              </div>
            </div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>ติดต่อ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_contact\" placeholder=\"Email address or phone number\" value=\"{{ this.page.mother_contact }}\">
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">2. ข้อมูลพื้นฐานของผู้เรียน</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          2.1 ระบุข้อมูลของผู้เรียน
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>ชื่อ-สกุล</label>
                <input type=\"text\" class=\"form-control\" name=\"student_name\" placeholder=\"Enter student's name\" value=\"{{ record.student_name }}\">
              </div>
            </div>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>เพศ</label>
\t\t\t\t\t\t\t\t<select class=\"form-control select select-primary\" data-toggle=\"select\" name=\"gender\">
\t\t\t\t\t\t\t\t\t<option value=\"\">{{ 'Gender'|_ }}</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\" {{ record.gender == 1 ? 'selected' : '' }}>{{ 'Male'|_ }}</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\" {{ record.gender == 2 ? 'selected' : '' }}>{{ 'Female'|_ }}</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\" {{ record.gender == 3 ? 'selected' : '' }}>{{ 'Other'|_ }}</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
            <div class=\"col-sm-3\">
              <div class=\"form-group\">
                <label>วัน เดือน ปี เกิด</label>
                <div class=\"input-group date\" data-provide=\"datepicker\">
                  <input type=\"text\" class=\"form-control\" name=\"birth_date\" value=\"{% if this.page.birt_date %} {{ this.page.birth_date }} {% else %} {{ \"now\"|date(\"d/m/Y\") }} {% endif %}\">
                    <div class=\"input-group-addon\">
                      <span class=\"fui-calendar\"></span>
                    </div>
                </div>
              </div>
            </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>ประวัติการศึกษา (กรณีเรียนในระบบโรงเรียนมาก่อน)</label>
                <textarea class=\"form-control\" name=\"school_exp\" placeholder=\"Enter school's experience\" rows=\"5\">{{ record.school_exp }}</textarea>
              </div>
            </div>
          </div>
          2.2 พัฒนาการของผู้เรียน (ระบุการพัฒนาการของผู้เรียน/ความสามารถพิเศษ/ความ
    ต้องการพิเศษ)
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"development\" placeholder=\"พัฒนาการตามวัย, พัฒนาการตามความสามารถพิเศษ หรือ พัฒนาการตามความตองการพิเศษ\" rows=\"10\">{{ record.development }}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">3. ระดับที่จัดการศึกษา / เหตุผลในการจัดการศึกษาของครอบครัว</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"class_reason\" placeholder=\"ระดับชั้น เช่น ประถมศึกษา (ชั้น ป.1 – ป.3) เหตุผลในการจัดการศึกษาของครอบครัว\" rows=\"20\">{% if record.class_reason is defined %} {{ record.class_reason }} {% else %} {{ this.page['default_3'] }} {% endif %}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">4. จุดมุ่งหมายของการจัดการศึกษา</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
          <div class=\"col-sm-12\">
            <div class=\"form-group\" style=\"padding:2px;\">
              <textarea class=\"form-control my-editor\" name=\"purpose\" placeholder=\"ระบุความต้องการ เช่น ต้องการพึ่งตนเอง ลดค่าใช้จ่าย เป็นต้น\" rows=\"20\">{% if record.purpose is defined %} {{ record.purpose }} {% else %} {{ this.page['default_4'] }} {% endif %}</textarea>
            </div>
          </div>
        </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">5. รูปแบบการจัดการศึกษา</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"format\" placeholder=\"\" rows=\"20\">{% if record.edu_type is defined %} {{ record.format }} {% else %} {{ this.page['default_5'] }} {% endif %}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">6. โครงสร้างเวลาเรียน</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control my-editor\" name=\"schedule\" placeholder=\"\" rows=\"20\">{% if record.schedule is defined %} {{ record.schedule }} {% else %} {{ this.page['default_6'] }} {% endif %}</textarea>
                <!--<textarea class=\"form-control\" name=\"schedule\" placeholder=\"กลุ่มประสบการณ์ /กลุ่มสาระการเรียนรู้ (ตามตารางในข้อ 7)\" rows=\"20\">{% if record.schedule is defined %} {{ record.schedule }} {% else %} {% endif %}</textarea>-->
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">7. การจัดกลุ่มสาระการเรียนรู้ /กลุ่มประสบการณ์</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"curriculum\" placeholder=\"\" rows=\"20\">{% if record.curriculum is defined %} {{ record.curriculum }} {% else %} {{ this.page['default_7'] }} {% endif %}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">8. การจัดกิจกรรมพัฒนาผู้เรียน</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"activity\" placeholder=\"\" rows=\"20\">{% if record.activity is defined %} {{ record.activity }} {% else %} {{ this.page['default_8'] }} {% endif %}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">9. การจัดกระบวนการเรียนรู้</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"learning\" placeholder=\"\" rows=\"20\">{% if record.learning is defined %} {{ record.learning }} {% else %} {{ this.page['default_9'] }} {% endif %}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">10. การวัดและประเมินผลการเรียนรู้</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"evaluate\" placeholder=\"\" rows=\"20\">{% if record.evaluate is defined %} {{ record.evaluate }} {% else %} {{ this.page['default_10'] }} {% endif %}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">11. อื่นๆ (ครอบครัวสามารถเพิ่มเติมรายละเอียดที่เห็นว่าเป็นประโยชน์ต่อผู้เรียนได้)</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"other\" placeholder=\"\" rows=\"20\">{{ record.other }}</textarea>
              </div>
            </div>
          </div>
        </dd>
      </dl>
    </div>
    <div class=\"clearfix\"></div>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6\">
\t\t\t<style>
\t\t\t\t.float{
\t\t\t\t\tposition:fixed;
\t\t\t\t\twidth:50px;
\t\t\t\t\theight:50px;
\t\t\t\t\tbottom:40px;
\t\t\t\t\tright:40px;
\t\t\t\t\ttext-align:center;
\t\t\t\t\tbox-shadow: 5px 5px 10px #999;
\t\t\t\t}
\t\t\t\t.float2{
\t\t\t\t\tposition:fixed;
\t\t\t\t\twidth:50px;
\t\t\t\t\theight:50px;
\t\t\t\t\tbottom:100px;
\t\t\t\t\tright:40px;
\t\t\t\t\ttext-align:center;
\t\t\t\t\tbox-shadow: 5px 5px 10px #999;
\t\t\t\t}
\t\t\t</style>
    \t<input type=\"hidden\" name=\"save_as\" value=\"0\">

\t\t\t<button type=\"button\" title=\"{{ 'Preview'|_ }}\" class=\"btn btn-lg btn-info fa fa-eye float2\" onClick=\"window.open('/user/course/{{ this.param.id }}', '_blank');\"></button>
\t\t\t{% if record.template == 0 or can('edit_course_template') %}
    \t\t<button type=\"submit\" class=\"btn btn-lg btn-default\" data-hotkey=\"ctrl+s, cmd+s\">{{ 'Save'|_ }}</button>
\t\t\t\t<button type=\"submit\" title=\"{{ 'Save'|_ }}\" class=\"btn btn-lg btn-default fa fa-save float\" data-hotkey=\"ctrl+s, cmd+s\"></button>
    \t{% endif %}
    \t{% if record.id is defined %}
\t\t    <button type=\"submit\" class=\"btn btn-lg btn-info\" onClick=\"if(confirm('{{ 'Save as'|_ }} '+this.form.name.value)) this.form.save_as.value = 1; else return false;\">{{ 'Save as'|_ }} ...</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-lg btn-info\" onClick=\"window.open('/user/course/{{ this.param.id }}', '_blank');\">{{ 'Preview'|_ }} </button>
\t\t\t\t<button type=\"button\" class=\"btn btn-lg btn-info\" onClick=\"window.open('/user/course/{{ this.param.id }}?print=1', '_blank');\">{{ 'Print to PDF'|_ }} </button>
\t\t\t\t{% if record.template == 0 or can('edit_course_template') %}
\t\t\t\t  <button type=\"button\" data-request=\"onDelete\" data-request-confirm=\"Are you sure?\" class=\"btn btn-lg btn-danger\">{{ 'Remove'|_ }}</button>
\t\t    {% endif %}
\t    {% endif %}
    </div>
  </div>
  <br>
</form><script src=\"{{ ['assets/js/accordion.js']|theme }}\"></script>
<script>
\tvar editor_config = {
\t\tpath_absolute : \"/\",
\t\tselector: \"textarea.my-editor\",
\t\tplugins: [
\t\t\t\"advlist autolink lists link image charmap print preview hr anchor pagebreak\",
\t\t\t\"searchreplace wordcount visualblocks visualchars code fullscreen\",
\t\t\t\"insertdatetime media nonbreaking save table contextmenu directionality\",
\t\t\t\"emoticons template paste textcolor colorpicker textpattern\"
\t\t],
\t\ttoolbar: \"fontsizeselect forecolor | bold italic underline | alignleft aligncenter alignright | bullist numlist indent outdent table | image media | removeformat\",
\t\ttemplates: [
\t\t\t{title: 'Some title 1', description: 'Some desc 1', content: 'My content'},
\t\t\t{title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
\t\t],
\t\tsetup : function(ed)
    {
        ed.on('init', function()
        {
            this.getDoc().body.style.fontSize = '16px';
            this.getDoc().body.style.fontFamily = 'Arial, Tahoma, Sarabun';
        });
    },
\t\trelative_urls: false,
\t\tforce_br_newlines : true,
\t\tforce_p_newlines : false,
\t\tforced_root_block : '',
\t\tfile_browser_callback : function(field_name, url, type, win) {
\t\t\tvar x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
\t\t\tvar y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

\t\t\tvar cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
\t\t\tif (type == 'image') {
\t\t\t\tcmsURL = cmsURL + \"&type=Images\";
\t\t\t} else {
\t\t\t\tcmsURL = cmsURL + \"&type=Files\";
\t\t\t}

\t\t\ttinyMCE.activeEditor.windowManager.open({
\t\t\t\tfile : cmsURL,
\t\t\t\ttitle : 'Filemanager',
\t\t\t\twidth : x * 0.8,
\t\t\t\theight : y * 0.8,
\t\t\t\tresizable : \"yes\",
\t\t\t\tclose_previous : \"no\"
\t\t\t});
\t\t}
\t};
\ttinymce.init(editor_config);
</script>
", "/home/vsites/homeschoolnetwork.org/plugins/numthang/homeschool/components/courseform/default.htm", "");
    }
}
