<?php

/* /home/vsites/homeschoolnetwork.org/plugins/numthang/homeschool/components/evaluationform/default.htm */
class __TwigTemplate_08b038f3704317540e45525d5f8aac7c77df138651a5d16766c335774b1c6a32 extends Twig_Template
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
        $context["evaluations"] = twig_get_attribute($this->env, $this->source, ($context["evaluations"] ?? null), "evaluations", array());
        // line 2
        $context["course"] = twig_get_attribute($this->env, $this->source, ($context["evaluationform"] ?? null), "course", array());
        // line 3
        $context["evaluation"] = twig_get_attribute($this->env, $this->source, ($context["evaluationform"] ?? null), "record", array());
        // line 4
        echo "
<form data-request=\"onSave\">
\t<script src=\"https://code.jquery.com/jquery-1.9.1.min.js\"></script>
\t<link id=\"bsdp-css\" href=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/css/bootstrap-datepicker3.min.css\" rel=\"stylesheet\">
\t<script src=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
\t<script type=\"text/javascript\">
\t\$.fn.datepicker.defaults.format = \"dd/mm/yyyy\";
\t</script>
\t<script src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<label>";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Evaluation"));
        echo "</label><br>
\t\t\t<div class=\"btn-group\" style=\"width:100%;\">
\t      <button data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\" type=\"button\" style=\"width:100%; text-align:left;\">&nbsp; <span class=\"fui-new\"></span> ";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Select Evaluation"));
        echo " <span class=\"caret\"></span></button>
\t      <ul role=\"menu\" class=\"dropdown-menu\" style=\"width:100%;\">
\t\t\t\t\t<li><a href=\"/login/new/evaluation\"><span class=\"fui-new\"></span> ";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("New Evaluation"));
        echo "</a></li>
\t\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evaluations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 21
            echo "\t\t\t\t\t<li><b>&nbsp;
\t\t\t\t\t\t";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["c"], "template", array())) {
                // line 23
                echo "\t\t\t\t\t\t\t[ ";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Template"));
                echo " ]
\t\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\t\t[ ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "created_at", array()), "m/d/Y"), "html", null, true);
                echo " ]
\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t \t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", array()), "html", null, true);
            echo "</b>
\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["c"], "evaluations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 29
                echo "\t\t\t\t\t\t\t<a href=\"/login/edit/evaluation/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", array()), "html", null, true);
                echo "\"> <span class=\"fui-new\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t      </ul>
\t    </div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<label>";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Courses"));
        echo " </label>
\t\t\t<select class=\"form-control select select-primary\" data-toggle=\"select\" name=\"course_id\" style=\"width:100%\">
\t\t\t\t<option value=\"\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Select Course"));
        echo "</option>
\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evaluations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 42
            echo "\t\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, $context["e"], "template", array()) == 0) || call_user_func_array($this->env->getFunction('can')->getCallable(), array("edit_course_template")))) {
                // line 43
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", array()), "html", null, true);
                echo "\" ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, $context["e"], "id", array()))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t";
            }
            // line 45
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t</select>
\t\t</div>
\t</div>

  <input type=\"hidden\" name=\"user_id\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"row\">
    <div class=\"col-md-3\">
      <div class=\"form-group ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method")) {
            echo " has-error ";
        }
        echo "\">
        <label>ชื่อแบบประเมิน</label>
        <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Enter course name : ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "name", array()), "html", null, true);
        echo "\">
        ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method")) {
            echo "<div class=\"alert alert-warning\" style=\"margin-top:4px;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 57
        echo "      </div>
    </div>
    <div class=\"col-md-3\">
      <div class=\"form-group ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "hs_name"), "method")) {
            echo " has-error ";
        }
        echo "\">
        <label>ชื่อบ้านเรียน</label>
        <input type=\"text\" class=\"form-control\" name=\"hs_name\" placeholder=\"Enter homeschool name : \" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "hs_name", array()), "html", null, true);
        echo "\" readonly>
        ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "hs_name"), "method")) {
            echo "<div class=\"alert alert-warning\" style=\"margin-top:4px;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "hs_name"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 64
        echo "      </div>
    </div>
\t\t<div class=\"col-md-3\">
\t\t\t<label>ระดับชั้น</label>
\t\t\t<select class=\"form-control select select-primary\" data-toggle=\"select\" name=\"degree\" style=\"width:100%\">
\t\t\t\t<option value=\"\">";
        // line 69
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Select Degree"));
        echo "</option>
\t\t\t\t<option value=\"1\" ";
        // line 70
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 1)) ? ("selected") : (""));
        echo ">อนุบาล 1</option>
\t\t\t\t<option value=\"2\" ";
        // line 71
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 2)) ? ("selected") : (""));
        echo ">อนุบาล 2</option>
\t\t\t\t<option value=\"3\" ";
        // line 72
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 3)) ? ("selected") : (""));
        echo ">อนุบาล 3</option>
\t\t\t\t<option value=\"4\" ";
        // line 73
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 4)) ? ("selected") : (""));
        echo ">ประถมศึกษาปีที่ 1</option>
\t\t\t\t<option value=\"5\" ";
        // line 74
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 5)) ? ("selected") : (""));
        echo ">ประถมศึกษาปีที่ 2</option>
\t\t\t\t<option value=\"6\" ";
        // line 75
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 6)) ? ("selected") : (""));
        echo ">ประถมศึกษาปีที่ 3</option>
\t\t\t\t<option value=\"7\" ";
        // line 76
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 7)) ? ("selected") : (""));
        echo ">ประถมศึกษาปีที่ 4</option>
\t\t\t\t<option value=\"8\" ";
        // line 77
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 8)) ? ("selected") : (""));
        echo ">ประถมศึกษาปีที่ 5</option>
\t\t\t\t<option value=\"9\" ";
        // line 78
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 9)) ? ("selected") : (""));
        echo ">ประถมศึกษาปีที่ 6</option>
\t\t\t\t<option value=\"10\" ";
        // line 79
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 10)) ? ("selected") : (""));
        echo ">มัธยมศึกษาปีที่ 1</option>
\t\t\t\t<option value=\"11\" ";
        // line 80
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 11)) ? ("selected") : (""));
        echo ">มัธยมศึกษาปีที่ 2</option>
\t\t\t\t<option value=\"12\" ";
        // line 81
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 12)) ? ("selected") : (""));
        echo ">มัธยมศึกษาปีที่ 3</option>
\t\t\t\t<option value=\"13\" ";
        // line 82
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 13)) ? ("selected") : (""));
        echo ">มัธยมศึกษาปีที่ 4</option>
\t\t\t\t<option value=\"14\" ";
        // line 83
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 14)) ? ("selected") : (""));
        echo ">มัธยมศึกษาปีที่ 5</option>
\t\t\t\t<option value=\"15\" ";
        // line 84
        echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "degree", array()) == 15)) ? ("selected") : (""));
        echo ">มัธยมศึกษาปีที่ 6</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<label>ปีการศึกษา</label>
\t\t\t<select class=\"form-control select select-primary\" data-toggle=\"select\" name=\"graduated\" style=\"width:100%\">
\t\t\t\t<option value=\"\">";
        // line 90
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Select Year"));
        echo "</option>
\t\t\t\t";
        // line 91
        $context["year"] = (twig_date_format_filter($this->env, "now", "Y") + 543);
        // line 92
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(2561, ($context["year"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 93
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "graduated", array()) == $context["i"])) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t</select>
\t\t</div>
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
        // line 106
        if (twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "cover", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "cover", array()), "html", null, true);
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
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_name", array()), "html", null, true);
        echo "\" readonly>
              </div>
            </div>
            <div class=\"col-sm-8\">
              <div class=\"form-group\">
                <label>วุฒิการศึกษา</label>
                <input type=\"text\" class=\"form-control\" name=\"father_degree\" placeholder=\"Enter father's degree\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_degree", array()), "html", null, true);
        echo "\" readonly>
              </div>
            </div>
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>ประสบการณ์</label>
                <textarea class=\"form-control\" name=\"father_exp\" placeholder=\"Enter father's experience\" rows=\"5\" readonly>";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_exp", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
            <div class=\"col-sm-2\">
              <div class=\"form-group\">
                <label>อายุ</label>
                <input type=\"text\" class=\"form-control\" name=\"father_age\" placeholder=\"Age\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_age", array()), "html", null, true);
        echo "\" readonly>
              </div>
            </div>
            <div class=\"col-sm-10\">
              <div class=\"form-group\">
                <label>อาชีพ</label>
                <input type=\"text\" class=\"form-control\" name=\"father_job\" placeholder=\"Enter father's job\"  value=\"";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_job", array()), "html", null, true);
        echo "\" readonly>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>ที่อยู่</label>
                <input type=\"text\" class=\"form-control\" name=\"father_addr\" placeholder=\"Enter father's address\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_addr", array()), "html", null, true);
        echo "\" readonly>
              </div>
            </div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>ติดต่อ</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"father_contact\" placeholder=\"Email address or phone number\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_contact", array()), "html", null, true);
        echo "\" readonly>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label>มารดา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_name\" placeholder=\"Enter mother's name\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_name", array()), "html", null, true);
        echo "\" readonly>
              </div>
            </div>
            <div class=\"col-sm-8\">
              <div class=\"form-group\">
                <label>วุฒิการศึกษา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_degree\" placeholder=\"Enter mother's degree\" value=\"";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_degree", array()), "html", null, true);
        echo "\" readonly>
              </div>
            </div>
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>ประสบการณ์</label>
                <textarea class=\"form-control\" name=\"mother_exp\" placeholder=\"Enter mother's experience\" rows=\"5\" readonly>";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_exp", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
            <div class=\"col-sm-2\">
              <div class=\"form-group\">
                <label>อายุ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_age\" placeholder=\"Age\" value=\"";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_age", array()), "html", null, true);
        echo "\" readonly>
              </div>
            </div>
            <div class=\"col-sm-10\">
              <div class=\"form-group\">
                <label>อาชีพ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_job\" placeholder=\"Enter mother's job\" value=\"";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_job", array()), "html", null, true);
        echo "\" readonly>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>ที่อยู่</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_addr\" placeholder=\"Enter mother's address\" value=\"";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_addr", array()), "html", null, true);
        echo "\" readonly>
              </div>
            </div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>ติดต่อ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_contact\" placeholder=\"Email address or phone number\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_contact", array()), "html", null, true);
        echo "\" readonly>
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
        // line 209
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "student_name", array()), "html", null, true);
        echo "\" readonly>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>วัน เดือน ปี เกิด</label>
                <div class=\"input-group date\" data-provide=\"datepicker\">
                  <input type=\"text\" class=\"form-control\" name=\"birth_date\" value=\"";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "birth_date", array()), "html", null, true);
        echo "\" readonly>
                    <div class=\"input-group-addon\">
                      <span class=\"fui-calendar\"></span>
                    </div>
                </div>
              </div>
            </div>
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>ประวัติการศึกษา (กรณีเรียนในระบบโรงเรียนมาก่อน)</label>
                <textarea class=\"form-control\" name=\"school_exp\" placeholder=\"Enter school's experience\" rows=\"5\" readonly>";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "school_exp", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
          2.2 พัฒนาการของผู้เรียน (ระบุการพัฒนาการของผู้เรียน/ความสามารถพิเศษ/ความ
    ต้องการพิเศษ)
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"development\" placeholder=\"\" rows=\"10\" readonly>";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "development", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">3. การวัดและประเมินผลการเรียนรู้</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"learning\" placeholder=\"\" rows=\"20\">";
        // line 245
        if (twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "learning", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "learning", array()), "html", null, true);
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
        <dt><a href=\"#\" class=\"accordionTitle\">4. สรุปผลการเรียนรู้ของผู้เรียนตามเกณฑ์การจบชั้นเรียน</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
          <div class=\"col-sm-12\">
            <div class=\"form-group\" style=\"padding:2px;\">
              <textarea class=\"form-control my-editor\" name=\"summary\" placeholder=\"ระบุความต้องการ เช่น ต้องการพึ่งตนเอง ลดค่าใช้จ่าย เป็นต้น\" rows=\"20\">";
        // line 255
        if (twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "summary", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "summary", array()), "html", null, true);
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
        <dt><a href=\"#\" class=\"accordionTitle\">5. จุดเด่น / ความสำเร็จที่สำคัญของการจัดการศึกษา</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"successful\" placeholder=\"\" rows=\"20\">";
        // line 265
        if (twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "successful", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "successful", array()), "html", null, true);
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
        <dt><a href=\"#\" class=\"accordionTitle\">6. ปัญหา, อุปสรรคหรือสิ่งที่ควรพัฒนา</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control my-editor\" name=\"problem\" placeholder=\"\" rows=\"20\">";
        // line 275
        if (twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "problem", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "problem", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["default_6"] ?? null) : null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">7. แนวทางการจัดการเรียนรู้ในปีต่อไป</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"next\" placeholder=\"\" rows=\"20\">";
        // line 285
        if (twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "next", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "next", array()), "html", null, true);
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
        <dt><a href=\"#\" class=\"accordionTitle\">8. ข้อคิดเห็น / ข้อเสนอแนะอื่น ๆ</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"suggestion\" placeholder=\"\" rows=\"20\">";
        // line 295
        if (twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "suggestion", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "suggestion", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["default_7"] ?? null) : null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">9. ภาคผนวก ร่องรอยการเรียนรู้</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"footprint\" placeholder=\"\" rows=\"40\"><div align=\"center\">";
        // line 305
        if (twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "footprint", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "footprint", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["default_7"] ?? null) : null), "html", null, true);
            echo " ";
        }
        echo "</div></textarea>
              </div>
            </div>
          </div>
        </dd>
      </dl>
    </div>
    <script src=\"";
        // line 312
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/js/accordion.js"));
        echo "\"></script>
\t\t<script>
\t\t\tvar editor_config = {
\t\t\t\tpath_absolute : \"/\",
\t\t\t\tselector: \"textarea.my-editor\",
\t\t\t\tplugins: [
\t\t\t\t\t\"advlist autolink lists link image charmap print preview hr anchor pagebreak\",
\t\t\t\t\t\"searchreplace wordcount visualblocks visualchars code fullscreen\",
\t\t\t\t\t\"insertdatetime media nonbreaking save table contextmenu directionality\",
\t\t\t\t\t\"emoticons template paste textcolor colorpicker textpattern\"
\t\t\t\t],
\t\t\t\ttoolbar: \"fontsizeselect forecolor | emoticons | bold italic underline | alignleft aligncenter alignright | bullist numlist indent outdent table | image media | removeformat\",
\t\t\t\ttemplates: [
\t\t\t\t\t{title: 'Some title 1', description: 'Some desc 1', content: 'My content'},
\t\t\t\t\t{title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
\t\t\t\t],
\t\t\t\tsetup : function(ed)
\t\t    {
\t\t        ed.on('init', function()
\t\t        {
\t\t            this.getDoc().body.style.fontSize = '16px';
\t\t            this.getDoc().body.style.fontFamily = 'Arial, Tahoma, Sarabun';
\t\t        });
\t\t    },
\t\t\t\trelative_urls: false,
\t\t\t\tforce_br_newlines : true,
\t\t\t\tforce_p_newlines : false,
\t\t\t\tforced_root_block : '',
\t\t\t\tfile_browser_callback : function(field_name, url, type, win) {
\t\t\t\t\tvar x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
\t\t\t\t\tvar y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

\t\t\t\t\tvar cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
\t\t\t\t\tif (type == 'image') {
\t\t\t\t\t\tcmsURL = cmsURL + \"&type=Images\";
\t\t\t\t\t} else {
\t\t\t\t\t\tcmsURL = cmsURL + \"&type=Files\";
\t\t\t\t\t}

\t\t\t\t\ttinyMCE.activeEditor.windowManager.open({
\t\t\t\t\t\tfile : cmsURL,
\t\t\t\t\t\ttitle : 'Filemanager',
\t\t\t\t\t\twidth : x * 0.8,
\t\t\t\t\t\theight : y * 0.8,
\t\t\t\t\t\tresizable : \"yes\",
\t\t\t\t\t\tclose_previous : \"no\"
\t\t\t\t\t});
\t\t\t\t}
\t\t\t};
\t\t\ttinymce.init(editor_config);
\t\t</script>
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
        // line 388
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Preview"));
        echo "\" class=\"btn btn-lg btn-info fa fa-eye float2\" onClick=\"window.open('/user/evaluation/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", array()), "id", array()), "html", null, true);
        echo "', '_blank');\"></button>
\t\t\t";
        // line 389
        if (((twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "template", array()) == 0) || call_user_func_array($this->env->getFunction('can')->getCallable(), array("edit_course_template")))) {
            // line 390
            echo "      \t<button type=\"submit\" class=\"btn btn-lg btn-default\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Save"));
            echo "</button>
\t\t\t\t<button type=\"submit\" title=\"";
            // line 391
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Save"));
            echo "\" class=\"btn btn-lg btn-default fa fa-save float\" data-hotkey=\"ctrl+s, cmd+s\"></button>
      ";
        }
        // line 393
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["evaluation"] ?? null), "id", array(), "any", true, true)) {
            // line 394
            echo "\t\t    <button type=\"submit\" class=\"btn btn-lg btn-info\" onClick=\"if(confirm('";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Save as"));
            echo " '+this.form.name.value)) this.form.save_as.value = 1; else return false;\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Save as"));
            echo " ...</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-lg btn-info\" onClick=\"window.open('/user/evaluation/";
            // line 395
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", array()), "id", array()), "html", null, true);
            echo "', '_blank');\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Preview"));
            echo " </button>
\t\t\t\t<button type=\"button\" class=\"btn btn-lg btn-info\" onClick=\"window.open('/user/evaluation/";
            // line 396
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", array()), "id", array()), "html", null, true);
            echo "?print=1', '_blank');\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Print to PDF"));
            echo " </button>
\t\t\t\t";
            // line 397
            if (((twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "template", array()) == 0) || call_user_func_array($this->env->getFunction('can')->getCallable(), array("edit_course_template")))) {
                // line 398
                echo "\t\t\t\t  <button type=\"button\" data-request=\"onDelete\" data-request-confirm=\"Are you sure?\" class=\"btn btn-lg btn-danger\">";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Remove"));
                echo "</button>
\t\t    ";
            }
            // line 400
            echo "      ";
        }
        // line 401
        echo "    </div>
  </div>
  <br>
</form>
";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschoolnetwork.org/plugins/numthang/homeschool/components/evaluationform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  787 => 401,  784 => 400,  778 => 398,  776 => 397,  770 => 396,  764 => 395,  757 => 394,  754 => 393,  749 => 391,  744 => 390,  742 => 389,  736 => 388,  657 => 312,  639 => 305,  618 => 295,  597 => 285,  576 => 275,  555 => 265,  534 => 255,  513 => 245,  500 => 235,  488 => 226,  475 => 216,  465 => 209,  450 => 197,  441 => 191,  432 => 185,  423 => 179,  414 => 173,  405 => 167,  396 => 161,  385 => 153,  376 => 147,  367 => 141,  358 => 135,  349 => 129,  340 => 123,  331 => 117,  309 => 106,  296 => 95,  283 => 93,  278 => 92,  276 => 91,  272 => 90,  263 => 84,  259 => 83,  255 => 82,  251 => 81,  247 => 80,  243 => 79,  239 => 78,  235 => 77,  231 => 76,  227 => 75,  223 => 74,  219 => 73,  215 => 72,  211 => 71,  207 => 70,  203 => 69,  196 => 64,  190 => 63,  186 => 62,  179 => 60,  174 => 57,  168 => 56,  162 => 55,  155 => 53,  149 => 50,  143 => 46,  137 => 45,  127 => 43,  124 => 42,  120 => 41,  116 => 40,  111 => 38,  105 => 34,  97 => 31,  86 => 29,  82 => 28,  77 => 27,  71 => 25,  65 => 23,  63 => 22,  60 => 21,  56 => 20,  52 => 19,  47 => 17,  42 => 15,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  set evaluations = evaluations.evaluations %}
{%  set course = evaluationform.course %}
{%  set evaluation = evaluationform.record %}

<form data-request=\"onSave\">
\t<script src=\"https://code.jquery.com/jquery-1.9.1.min.js\"></script>
\t<link id=\"bsdp-css\" href=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/css/bootstrap-datepicker3.min.css\" rel=\"stylesheet\">
\t<script src=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
\t<script type=\"text/javascript\">
\t\$.fn.datepicker.defaults.format = \"dd/mm/yyyy\";
\t</script>
\t<script src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<label>{{ 'Evaluation'|_ }}</label><br>
\t\t\t<div class=\"btn-group\" style=\"width:100%;\">
\t      <button data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\" type=\"button\" style=\"width:100%; text-align:left;\">&nbsp; <span class=\"fui-new\"></span> {{ 'Select Evaluation'|_ }} <span class=\"caret\"></span></button>
\t      <ul role=\"menu\" class=\"dropdown-menu\" style=\"width:100%;\">
\t\t\t\t\t<li><a href=\"/login/new/evaluation\"><span class=\"fui-new\"></span> {{ 'New Evaluation'|_ }}</a></li>
\t\t\t\t\t{% for c in evaluations %}
\t\t\t\t\t<li><b>&nbsp;
\t\t\t\t\t\t{% if c.template %}
\t\t\t\t\t\t\t[ {{ 'Template'|_ }} ]
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t[ {{ c.created_at|date(\"m/d/Y\") }} ]
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t \t{{ c.name }}</b>
\t\t\t\t\t\t{% for e in c.evaluations %}
\t\t\t\t\t\t\t<a href=\"/login/edit/evaluation/{{ e.id }}\"> <span class=\"fui-new\"></span> {{ e.name }}</a>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t{% endfor %}
\t      </ul>
\t    </div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<label>{{ 'Courses'|_ }} </label>
\t\t\t<select class=\"form-control select select-primary\" data-toggle=\"select\" name=\"course_id\" style=\"width:100%\">
\t\t\t\t<option value=\"\">{{ 'Select Course'|_ }}</option>
\t\t\t\t{% for e in evaluations %}
\t\t\t\t\t{% if e.template == 0 or can('edit_course_template') %}
\t\t\t\t\t<option value=\"{{ e.id }}\" {{ course.id == e.id ? 'selected' : '' }}>{{ e.name }}</option>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t</div>
\t</div>

  <input type=\"hidden\" name=\"user_id\" value=\"{{ user.id }}\">
  <div class=\"row\">
    <div class=\"col-md-3\">
      <div class=\"form-group {% if errors.first('name') %} has-error {% endif %}\">
        <label>ชื่อแบบประเมิน</label>
        <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Enter course name : {{ errors.first('name') }}\" value=\"{{ evaluation.name }}\">
        {% if errors.first('name') %}<div class=\"alert alert-warning\" style=\"margin-top:4px;\">{{ errors.first('name') }}</div>{% endif %}
      </div>
    </div>
    <div class=\"col-md-3\">
      <div class=\"form-group {% if errors.first('hs_name') %} has-error {% endif %}\">
        <label>ชื่อบ้านเรียน</label>
        <input type=\"text\" class=\"form-control\" name=\"hs_name\" placeholder=\"Enter homeschool name : \" value=\"{{ course.hs_name }}\" readonly>
        {% if errors.first('hs_name') %}<div class=\"alert alert-warning\" style=\"margin-top:4px;\">{{ errors.first('hs_name') }}</div>{% endif %}
      </div>
    </div>
\t\t<div class=\"col-md-3\">
\t\t\t<label>ระดับชั้น</label>
\t\t\t<select class=\"form-control select select-primary\" data-toggle=\"select\" name=\"degree\" style=\"width:100%\">
\t\t\t\t<option value=\"\">{{ 'Select Degree'|_ }}</option>
\t\t\t\t<option value=\"1\" {{ evaluation.degree == 1 ? 'selected' : '' }}>อนุบาล 1</option>
\t\t\t\t<option value=\"2\" {{ evaluation.degree == 2 ? 'selected' : '' }}>อนุบาล 2</option>
\t\t\t\t<option value=\"3\" {{ evaluation.degree == 3 ? 'selected' : '' }}>อนุบาล 3</option>
\t\t\t\t<option value=\"4\" {{ evaluation.degree == 4 ? 'selected' : '' }}>ประถมศึกษาปีที่ 1</option>
\t\t\t\t<option value=\"5\" {{ evaluation.degree == 5 ? 'selected' : '' }}>ประถมศึกษาปีที่ 2</option>
\t\t\t\t<option value=\"6\" {{ evaluation.degree == 6 ? 'selected' : '' }}>ประถมศึกษาปีที่ 3</option>
\t\t\t\t<option value=\"7\" {{ evaluation.degree == 7 ? 'selected' : '' }}>ประถมศึกษาปีที่ 4</option>
\t\t\t\t<option value=\"8\" {{ evaluation.degree == 8 ? 'selected' : '' }}>ประถมศึกษาปีที่ 5</option>
\t\t\t\t<option value=\"9\" {{ evaluation.degree == 9 ? 'selected' : '' }}>ประถมศึกษาปีที่ 6</option>
\t\t\t\t<option value=\"10\" {{ evaluation.degree == 10 ? 'selected' : '' }}>มัธยมศึกษาปีที่ 1</option>
\t\t\t\t<option value=\"11\" {{ evaluation.degree == 11 ? 'selected' : '' }}>มัธยมศึกษาปีที่ 2</option>
\t\t\t\t<option value=\"12\" {{ evaluation.degree == 12 ? 'selected' : '' }}>มัธยมศึกษาปีที่ 3</option>
\t\t\t\t<option value=\"13\" {{ evaluation.degree == 13 ? 'selected' : '' }}>มัธยมศึกษาปีที่ 4</option>
\t\t\t\t<option value=\"14\" {{ evaluation.degree == 14 ? 'selected' : '' }}>มัธยมศึกษาปีที่ 5</option>
\t\t\t\t<option value=\"15\" {{ evaluation.degree == 15 ? 'selected' : '' }}>มัธยมศึกษาปีที่ 6</option>
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<label>ปีการศึกษา</label>
\t\t\t<select class=\"form-control select select-primary\" data-toggle=\"select\" name=\"graduated\" style=\"width:100%\">
\t\t\t\t<option value=\"\">{{ 'Select Year'|_ }}</option>
\t\t\t\t{% set year = \"now\"|date(\"Y\")+543 %}
\t\t\t\t{% for i in 2561..year %}
\t\t\t\t\t<option value=\"{{ i }}\" {{ evaluation.graduated == i ? 'selected' : '' }}>{{ i }}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t</div>
  </div>
  <div class=\"board-inner\">
    <div class=\"accordion\">
      <dl>
\t\t\t\t<dt><a href=\"#\" class=\"accordionTitle\">0. ปก</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"cover\" placeholder=\"\" rows=\"43\">{% if evaluation.cover is defined %} {{ evaluation.cover }} {% else %} {{ this.page['default_0'] }} {% endif %}</textarea>
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
                <input type=\"text\" class=\"form-control\" name=\"father_name\" placeholder=\"Enter father's name\" value=\"{{ this.page.father_name }}\" readonly>
              </div>
            </div>
            <div class=\"col-sm-8\">
              <div class=\"form-group\">
                <label>วุฒิการศึกษา</label>
                <input type=\"text\" class=\"form-control\" name=\"father_degree\" placeholder=\"Enter father's degree\" value=\"{{ this.page.father_degree }}\" readonly>
              </div>
            </div>
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>ประสบการณ์</label>
                <textarea class=\"form-control\" name=\"father_exp\" placeholder=\"Enter father's experience\" rows=\"5\" readonly>{{ this.page.father_exp }}</textarea>
              </div>
            </div>
            <div class=\"col-sm-2\">
              <div class=\"form-group\">
                <label>อายุ</label>
                <input type=\"text\" class=\"form-control\" name=\"father_age\" placeholder=\"Age\" value=\"{{ this.page.father_age }}\" readonly>
              </div>
            </div>
            <div class=\"col-sm-10\">
              <div class=\"form-group\">
                <label>อาชีพ</label>
                <input type=\"text\" class=\"form-control\" name=\"father_job\" placeholder=\"Enter father's job\"  value=\"{{ this.page.father_job }}\" readonly>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>ที่อยู่</label>
                <input type=\"text\" class=\"form-control\" name=\"father_addr\" placeholder=\"Enter father's address\" value=\"{{ this.page.father_addr }}\" readonly>
              </div>
            </div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>ติดต่อ</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"father_contact\" placeholder=\"Email address or phone number\" value=\"{{ this.page.father_contact }}\" readonly>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label>มารดา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_name\" placeholder=\"Enter mother's name\" value=\"{{ this.page.mother_name }}\" readonly>
              </div>
            </div>
            <div class=\"col-sm-8\">
              <div class=\"form-group\">
                <label>วุฒิการศึกษา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_degree\" placeholder=\"Enter mother's degree\" value=\"{{ this.page.mother_degree }}\" readonly>
              </div>
            </div>
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>ประสบการณ์</label>
                <textarea class=\"form-control\" name=\"mother_exp\" placeholder=\"Enter mother's experience\" rows=\"5\" readonly>{{ this.page.mother_exp }}</textarea>
              </div>
            </div>
            <div class=\"col-sm-2\">
              <div class=\"form-group\">
                <label>อายุ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_age\" placeholder=\"Age\" value=\"{{ this.page.mother_age }}\" readonly>
              </div>
            </div>
            <div class=\"col-sm-10\">
              <div class=\"form-group\">
                <label>อาชีพ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_job\" placeholder=\"Enter mother's job\" value=\"{{ this.page.mother_job }}\" readonly>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>ที่อยู่</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_addr\" placeholder=\"Enter mother's address\" value=\"{{ this.page.mother_addr }}\" readonly>
              </div>
            </div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>ติดต่อ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_contact\" placeholder=\"Email address or phone number\" value=\"{{ this.page.mother_contact }}\" readonly>
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
                <input type=\"text\" class=\"form-control\" name=\"student_name\" placeholder=\"Enter student's name\" value=\"{{ course.student_name }}\" readonly>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>วัน เดือน ปี เกิด</label>
                <div class=\"input-group date\" data-provide=\"datepicker\">
                  <input type=\"text\" class=\"form-control\" name=\"birth_date\" value=\"{{ this.page.birth_date }}\" readonly>
                    <div class=\"input-group-addon\">
                      <span class=\"fui-calendar\"></span>
                    </div>
                </div>
              </div>
            </div>
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>ประวัติการศึกษา (กรณีเรียนในระบบโรงเรียนมาก่อน)</label>
                <textarea class=\"form-control\" name=\"school_exp\" placeholder=\"Enter school's experience\" rows=\"5\" readonly>{{ course.school_exp }}</textarea>
              </div>
            </div>
          </div>
          2.2 พัฒนาการของผู้เรียน (ระบุการพัฒนาการของผู้เรียน/ความสามารถพิเศษ/ความ
    ต้องการพิเศษ)
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"development\" placeholder=\"\" rows=\"10\" readonly>{{ course.development }}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">3. การวัดและประเมินผลการเรียนรู้</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"learning\" placeholder=\"\" rows=\"20\">{% if evaluation.learning is defined %} {{ evaluation.learning }} {% else %} {{ this.page['default_3'] }} {% endif %}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">4. สรุปผลการเรียนรู้ของผู้เรียนตามเกณฑ์การจบชั้นเรียน</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
          <div class=\"col-sm-12\">
            <div class=\"form-group\" style=\"padding:2px;\">
              <textarea class=\"form-control my-editor\" name=\"summary\" placeholder=\"ระบุความต้องการ เช่น ต้องการพึ่งตนเอง ลดค่าใช้จ่าย เป็นต้น\" rows=\"20\">{% if evaluation.summary is defined %} {{ evaluation.summary }} {% else %} {{ this.page['default_4'] }} {% endif %}</textarea>
            </div>
          </div>
        </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">5. จุดเด่น / ความสำเร็จที่สำคัญของการจัดการศึกษา</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"successful\" placeholder=\"\" rows=\"20\">{% if evaluation.successful is defined %} {{ evaluation.successful }} {% else %} {{ this.page['default_5'] }} {% endif %}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">6. ปัญหา, อุปสรรคหรือสิ่งที่ควรพัฒนา</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
\t\t\t\t\t\t\t\t<textarea class=\"form-control my-editor\" name=\"problem\" placeholder=\"\" rows=\"20\">{% if evaluation.problem is defined %} {{ evaluation.problem }} {% else %} {{ this.page['default_6'] }} {% endif %}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">7. แนวทางการจัดการเรียนรู้ในปีต่อไป</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"next\" placeholder=\"\" rows=\"20\">{% if evaluation.next is defined %} {{ evaluation.next }} {% else %} {{ this.page['default_7'] }} {% endif %}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">8. ข้อคิดเห็น / ข้อเสนอแนะอื่น ๆ</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"suggestion\" placeholder=\"\" rows=\"20\">{% if evaluation.suggestion is defined %} {{ evaluation.suggestion }} {% else %} {{ this.page['default_7'] }} {% endif %}</textarea>
              </div>
            </div>
          </div>
        </dd>
        <dt><a href=\"#\" class=\"accordionTitle\">9. ภาคผนวก ร่องรอยการเรียนรู้</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\" style=\"padding:2px;\">
                <textarea class=\"form-control my-editor\" name=\"footprint\" placeholder=\"\" rows=\"40\"><div align=\"center\">{% if evaluation.footprint is defined %} {{ evaluation.footprint }} {% else %} {{ this.page['default_7'] }} {% endif %}</div></textarea>
              </div>
            </div>
          </div>
        </dd>
      </dl>
    </div>
    <script src=\"{{ ['assets/js/accordion.js']|theme }}\"></script>
\t\t<script>
\t\t\tvar editor_config = {
\t\t\t\tpath_absolute : \"/\",
\t\t\t\tselector: \"textarea.my-editor\",
\t\t\t\tplugins: [
\t\t\t\t\t\"advlist autolink lists link image charmap print preview hr anchor pagebreak\",
\t\t\t\t\t\"searchreplace wordcount visualblocks visualchars code fullscreen\",
\t\t\t\t\t\"insertdatetime media nonbreaking save table contextmenu directionality\",
\t\t\t\t\t\"emoticons template paste textcolor colorpicker textpattern\"
\t\t\t\t],
\t\t\t\ttoolbar: \"fontsizeselect forecolor | emoticons | bold italic underline | alignleft aligncenter alignright | bullist numlist indent outdent table | image media | removeformat\",
\t\t\t\ttemplates: [
\t\t\t\t\t{title: 'Some title 1', description: 'Some desc 1', content: 'My content'},
\t\t\t\t\t{title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
\t\t\t\t],
\t\t\t\tsetup : function(ed)
\t\t    {
\t\t        ed.on('init', function()
\t\t        {
\t\t            this.getDoc().body.style.fontSize = '16px';
\t\t            this.getDoc().body.style.fontFamily = 'Arial, Tahoma, Sarabun';
\t\t        });
\t\t    },
\t\t\t\trelative_urls: false,
\t\t\t\tforce_br_newlines : true,
\t\t\t\tforce_p_newlines : false,
\t\t\t\tforced_root_block : '',
\t\t\t\tfile_browser_callback : function(field_name, url, type, win) {
\t\t\t\t\tvar x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
\t\t\t\t\tvar y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

\t\t\t\t\tvar cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
\t\t\t\t\tif (type == 'image') {
\t\t\t\t\t\tcmsURL = cmsURL + \"&type=Images\";
\t\t\t\t\t} else {
\t\t\t\t\t\tcmsURL = cmsURL + \"&type=Files\";
\t\t\t\t\t}

\t\t\t\t\ttinyMCE.activeEditor.windowManager.open({
\t\t\t\t\t\tfile : cmsURL,
\t\t\t\t\t\ttitle : 'Filemanager',
\t\t\t\t\t\twidth : x * 0.8,
\t\t\t\t\t\theight : y * 0.8,
\t\t\t\t\t\tresizable : \"yes\",
\t\t\t\t\t\tclose_previous : \"no\"
\t\t\t\t\t});
\t\t\t\t}
\t\t\t};
\t\t\ttinymce.init(editor_config);
\t\t</script>
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
\t\t\t<button type=\"button\" title=\"{{ 'Preview'|_ }}\" class=\"btn btn-lg btn-info fa fa-eye float2\" onClick=\"window.open('/user/evaluation/{{ this.param.id }}', '_blank');\"></button>
\t\t\t{% if course.template == 0 or can('edit_course_template') %}
      \t<button type=\"submit\" class=\"btn btn-lg btn-default\">{{ 'Save'|_ }}</button>
\t\t\t\t<button type=\"submit\" title=\"{{ 'Save'|_ }}\" class=\"btn btn-lg btn-default fa fa-save float\" data-hotkey=\"ctrl+s, cmd+s\"></button>
      {% endif %}
      {% if evaluation.id is defined %}
\t\t    <button type=\"submit\" class=\"btn btn-lg btn-info\" onClick=\"if(confirm('{{ 'Save as'|_ }} '+this.form.name.value)) this.form.save_as.value = 1; else return false;\">{{ 'Save as'|_ }} ...</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-lg btn-info\" onClick=\"window.open('/user/evaluation/{{ this.param.id }}', '_blank');\">{{ 'Preview'|_ }} </button>
\t\t\t\t<button type=\"button\" class=\"btn btn-lg btn-info\" onClick=\"window.open('/user/evaluation/{{ this.param.id }}?print=1', '_blank');\">{{ 'Print to PDF'|_ }} </button>
\t\t\t\t{% if course.template == 0 or can('edit_course_template') %}
\t\t\t\t  <button type=\"button\" data-request=\"onDelete\" data-request-confirm=\"Are you sure?\" class=\"btn btn-lg btn-danger\">{{ 'Remove'|_ }}</button>
\t\t    {% endif %}
      {% endif %}
    </div>
  </div>
  <br>
</form>
", "/home/vsites/homeschoolnetwork.org/plugins/numthang/homeschool/components/evaluationform/default.htm", "");
    }
}
