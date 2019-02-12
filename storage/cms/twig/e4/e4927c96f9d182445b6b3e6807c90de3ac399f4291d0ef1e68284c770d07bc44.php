<?php

/* /home/vsites/homeschool.in.th/plugins/numthang/homeschool/components/courseform/default.htm */
class __TwigTemplate_b13f20b9ec29aa500249e8340854aeaca8862fdb7708ba63c6afb24dfabed5ad extends Twig_Template
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
        echo "<script src=\"https://code.jquery.com/jquery-1.9.1.min.js\"></script>
<link id=\"bsdp-css\" href=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/css/bootstrap-datepicker3.min.css\" rel=\"stylesheet\">
<script src=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script type=\"text/javascript\">
\$.fn.datepicker.defaults.format = \"dd/mm/yyyy\";
</script>

<form data-request=\"onSave\">
  <input type=\"hidden\" name=\"user_id\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"row\">
    <div class=\"col-sm-6\">  
      <div class=\"form-group ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method")) {
            echo " has-error ";
        }
        echo "\">
        <label>ชื่อแผนการศึกษา</label>
        <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Enter course name : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "name", array()), "html", null, true);
        echo "\">
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method")) {
            echo "<div class=\"alert alert-warning\" style=\"margin-top:4px;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "name"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 16
        echo "      </div>
    </div>
    <div class=\"col-sm-6\">  
      <div class=\"form-group ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "hs_name"), "method")) {
            echo " has-error ";
        }
        echo "\">
        <label>ชื่อบ้านเรียน</label>
        <input type=\"text\" class=\"form-control\" name=\"hs_name\" placeholder=\"Enter homeschool name : \" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "hs_name", array()), "html", null, true);
        echo "\">
        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "hs_name"), "method")) {
            echo "<div class=\"alert alert-warning\" style=\"margin-top:4px;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "hs_name"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 23
        echo "      </div>
    </div>
  </div>
  <div class=\"board-inner\">
    <div class=\"accordion\">
      <dl>
        <dt><a class=\"accordionTitle\" href=\"#\">1. ข้อมูลพื้นฐานของครอบครัว</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>บิดา</label>
                <input type=\"text\" class=\"form-control\" name=\"father_name\" placeholder=\"Enter father's name\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_name", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>วุฒิการศึกษา</label>
                <input type=\"text\" class=\"form-control\" name=\"father_degree\" placeholder=\"Enter father's degree\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_degree", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ประสบการณ์</label>
                <textarea class=\"form-control\" name=\"father_exp\" placeholder=\"Enter father's experience\" rows=\"5\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_exp", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
            <div class=\"col-sm-2\"> 
              <div class=\"form-group\">
                <label>อายุ</label>
                <input type=\"text\" class=\"form-control\" name=\"father_age\" placeholder=\"Age\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_age", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-10\"> 
              <div class=\"form-group\">
                <label>อาชีพ</label>
                <input type=\"text\" class=\"form-control\" name=\"father_job\" placeholder=\"Enter father's job\"  value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_job", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ท่ี่อยู่</label>
                <input type=\"text\" class=\"form-control\" name=\"father_addr\" placeholder=\"Enter father's address\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "father_addr", array()), "html", null, true);
        echo "\">
              </div>
            </div>

            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>มารดา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_name\" placeholder=\"Enter mother's name\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_name", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>วุฒิการศึกษา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_degree\" placeholder=\"Enter mother's degree\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_degree", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ประสบการณ์</label>
                <textarea class=\"form-control\" name=\"mother_exp\" placeholder=\"Enter mother's experience\" rows=\"5\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_exp", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
            <div class=\"col-sm-2\"> 
              <div class=\"form-group\">
                <label>อายุ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_age\" placeholder=\"Age\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_age", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-10\"> 
              <div class=\"form-group\">
                <label>อาชีพ</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_job\" placeholder=\"Enter mother's job\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_job", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ที่อยู่</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_addr\" placeholder=\"Enter mother's address\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "mother_addr", array()), "html", null, true);
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
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "student_name", array()), "html", null, true);
        echo "\">
              </div>
            </div>
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>วัน เดือน ปี เกิด</label>
                <div class=\"input-group date\" data-provide=\"datepicker\">
                  <input type=\"text\" class=\"form-control\" name=\"birth_date\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "birth_date", array()), "html", null, true);
        echo "\">
                    <div class=\"input-group-addon\">
                      <span class=\"fui-calendar\"></span>
                    </div>
                </div>
              </div>
            </div>
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ประวัติการศึกษา (กรณีเรียนในระบบโรงเรียนมาก่อน)</label>
                <textarea class=\"form-control\" name=\"school_exp\" placeholder=\"Enter school's experience\" rows=\"5\">";
        // line 131
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
        // line 140
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
        // line 150
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "class_reason", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "class_reason", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["default_3"] ?? null) : null), "html", null, true);
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
        // line 160
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "purpose", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "purpose", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["default_4"] ?? null) : null), "html", null, true);
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
        // line 170
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "edu_type", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "format", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["default_5"] ?? null) : null), "html", null, true);
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
              \t<script src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
\t\t\t\t\t\t\t\t<textarea class=\"form-control my-editor\" name=\"schedule\" placeholder=\"\" rows=\"20\">";
        // line 181
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "schedule", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "schedule", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["default_6"] ?? null) : null), "html", null, true);
            echo " ";
        }
        echo "</textarea>
                <!--<textarea class=\"form-control\" name=\"schedule\" placeholder=\"กลุ่มประสบการณ์ /กลุ่มสาระการเรียนรู้ (ตามตารางในข้อ 7)\" rows=\"20\">";
        // line 182
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
        // line 192
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "curriculum", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "curriculum", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["default_7"] ?? null) : null), "html", null, true);
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
        // line 202
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "activity", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "activity", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["default_8"] ?? null) : null), "html", null, true);
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
        // line 212
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "learning", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "learning", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["default_9"] ?? null) : null), "html", null, true);
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
        // line 222
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "evaluate", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "evaluate", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array())) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["default_10"] ?? null) : null), "html", null, true);
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
        // line 232
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "other", array()), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </div>
        </dd>
      </dl>
    </div>
    <script src=\"";
        // line 239
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
\t\t\t\ttoolbar: \"fontsizeselect forecolor backcolor | bold italic underline | alignleft aligncenter alignright | bullist numlist | outdent indent | superscript\",
\t\t\t\ttemplates: [
\t\t\t\t\t{title: 'Some title 1', description: 'Some desc 1', content: 'My content'},
\t\t\t\t\t{title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
\t\t\t\t],
\t\t\t\trelative_urls: false,
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
    \t<input type=\"hidden\" name=\"save_as\" value=\"0\">
\t\t\t";
        // line 284
        if (((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "template", array()) == 0) || call_user_func_array($this->env->getFunction('can')->getCallable(), array("edit_course_template")))) {
            // line 285
            echo "      \t<button type=\"submit\" class=\"btn btn-lg btn-default\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Save"));
            echo "</button>
      ";
        }
        // line 287
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", array(), "any", true, true)) {
            // line 288
            echo "\t\t    <button type=\"submit\" class=\"btn btn-lg btn-info\" onClick=\"if(confirm('";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Save as"));
            echo " '+this.form.name.value)) this.form.save_as.value = 1; else return false;\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Save as"));
            echo " ...</button>
\t\t\t\t";
            // line 289
            if (((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "template", array()) == 0) || call_user_func_array($this->env->getFunction('can')->getCallable(), array("edit_course_template")))) {
                // line 290
                echo "\t\t\t\t  <button type=\"button\" data-request=\"onDelete\" data-request-confirm=\"Are you sure?\" class=\"btn btn-lg btn-danger\">";
                echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Remove"));
                echo "</button>
\t\t    ";
            }
            // line 292
            echo "      ";
        }
        // line 293
        echo "    </div>
  </div>
  <br>
</form>
";
    }

    public function getTemplateName()
    {
        return "/home/vsites/homeschool.in.th/plugins/numthang/homeschool/components/courseform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  523 => 293,  520 => 292,  514 => 290,  512 => 289,  505 => 288,  502 => 287,  496 => 285,  494 => 284,  446 => 239,  436 => 232,  415 => 222,  394 => 212,  373 => 202,  352 => 192,  333 => 182,  321 => 181,  299 => 170,  278 => 160,  257 => 150,  244 => 140,  232 => 131,  219 => 121,  209 => 114,  194 => 102,  185 => 96,  176 => 90,  167 => 84,  158 => 78,  149 => 72,  139 => 65,  130 => 59,  121 => 53,  112 => 47,  103 => 41,  94 => 35,  80 => 23,  74 => 22,  70 => 21,  63 => 19,  58 => 16,  52 => 15,  46 => 14,  39 => 12,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"https://code.jquery.com/jquery-1.9.1.min.js\"></script>
<link id=\"bsdp-css\" href=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/css/bootstrap-datepicker3.min.css\" rel=\"stylesheet\">
<script src=\"https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script type=\"text/javascript\">
\$.fn.datepicker.defaults.format = \"dd/mm/yyyy\";
</script>

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
        <dt><a class=\"accordionTitle\" href=\"#\">1. ข้อมูลพื้นฐานของครอบครัว</a></dt>
        <dd class=\"accordionItem accordionItemCollapsed\">
          <div class=\"row\">
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>บิดา</label>
                <input type=\"text\" class=\"form-control\" name=\"father_name\" placeholder=\"Enter father's name\" value=\"{{ this.page.father_name }}\">
              </div>
            </div>
            <div class=\"col-sm-6\"> 
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
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ท่ี่อยู่</label>
                <input type=\"text\" class=\"form-control\" name=\"father_addr\" placeholder=\"Enter father's address\" value=\"{{ this.page.father_addr }}\">
              </div>
            </div>

            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>มารดา</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_name\" placeholder=\"Enter mother's name\" value=\"{{ this.page.mother_name }}\">
              </div>
            </div>
            <div class=\"col-sm-6\"> 
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
            <div class=\"col-sm-12\"> 
              <div class=\"form-group\">
                <label>ที่อยู่</label>
                <input type=\"text\" class=\"form-control\" name=\"mother_addr\" placeholder=\"Enter mother's address\" value=\"{{ this.page.mother_addr }}\">
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
            <div class=\"col-sm-6\"> 
              <div class=\"form-group\">
                <label>วัน เดือน ปี เกิด</label>
                <div class=\"input-group date\" data-provide=\"datepicker\">
                  <input type=\"text\" class=\"form-control\" name=\"birth_date\" value=\"{{ this.page.birth_date }}\">
                    <div class=\"input-group-addon\">
                      <span class=\"fui-calendar\"></span>
                    </div>
                </div>
              </div>
            </div>
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
              \t<script src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
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
\t\t\t\ttoolbar: \"fontsizeselect forecolor backcolor | bold italic underline | alignleft aligncenter alignright | bullist numlist | outdent indent | superscript\",
\t\t\t\ttemplates: [
\t\t\t\t\t{title: 'Some title 1', description: 'Some desc 1', content: 'My content'},
\t\t\t\t\t{title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
\t\t\t\t],
\t\t\t\trelative_urls: false,
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
    \t<input type=\"hidden\" name=\"save_as\" value=\"0\">
\t\t\t{% if record.template == 0 or can('edit_course_template') %}
      \t<button type=\"submit\" class=\"btn btn-lg btn-default\">{{ 'Save'|_ }}</button>
      {% endif %}
      {% if record.id is defined %}
\t\t    <button type=\"submit\" class=\"btn btn-lg btn-info\" onClick=\"if(confirm('{{ 'Save as'|_ }} '+this.form.name.value)) this.form.save_as.value = 1; else return false;\">{{ 'Save as'|_ }} ...</button>
\t\t\t\t{% if record.template == 0 or can('edit_course_template') %}
\t\t\t\t  <button type=\"button\" data-request=\"onDelete\" data-request-confirm=\"Are you sure?\" class=\"btn btn-lg btn-danger\">{{ 'Remove'|_ }}</button>
\t\t    {% endif %}
      {% endif %}
    </div>
  </div>
  <br>
</form>
", "/home/vsites/homeschool.in.th/plugins/numthang/homeschool/components/courseform/default.htm", "");
    }
}
