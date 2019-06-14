/*
 * FileMulti class
 *
 * Dependences:
 * - Some other plugin (filename.js)
 */

+function ($) { "use strict";
    var MultiFileUploader = function (element, options) {
        this.options = options

        this.$container = $(element)
        this.$el = $('.content', element)
        this.$clickable = $('.clickable', element)
        this.$template = $('.template', element)
        this.$fileHolder = $('div.img', this.$el)

        var acceptedFiles = this.options.fileTypes
        if (acceptedFiles == '*')
            acceptedFiles = null

        this.dropzone = new Dropzone(this.$container.get(0), {
            url: window.location,
            clickable: this.$clickable.get(0),
            previewsContainer: this.$el.get(0),
            previewTemplate: this.$template.html(),
            acceptedFiles: acceptedFiles,
            maxFilesize: this.options.maxSize,
            paramName: 'file_data'
        })

        var self = this

        this.dropzone.on("error", function(file, error){
            alert(error)
        })

        this.dropzone.on("sending", function(file, xhr, formData) {
            self.addExtraFormData(formData)
        })

        this.dropzone.on("success", function(file, response){
            self.updateFile(file, response)
        })

        this.$el.on('click', '.delete', function(){
            self.removeFile($(this))
        })
    }

    MultiFileUploader.prototype.addExtraFormData = function(formData) {
        if (this.options.extraData) {
            $.each(this.options.extraData, function (name, value) {
                formData.append(name, value)
            })
        }

        var $form = this.$el.closest('form')
        if ($form.length > 0) {
            $.each($form.serializeArray(), function (index, field) {
                formData.append(field.name, field.value)
            })
        }
    }

    MultiFileUploader.prototype.updateFile = function(file, response) {
        var $preview = $(file.previewElement),
            $img = $('.thumbnail', $preview)

        if (response.id) {
            $preview.data('id', response.id)
            $img.attr('src', response.thumb)
        }
    }

    MultiFileUploader.prototype.removeFile = function($link) {

        var self = this,
            $preview = $link.closest('.dz-preview'),
            id = $preview.data('id')

        if (!id) {
            $preview.remove()
            return
        }

        $preview.removeClass('dz-success').addClass('dz-removing')

        var request = this.$container.closest('form').request(this.options.handler, {
            data: {
                id: id,
                mode: 'delete'
            },
            redirect: false
        })

        request.success(function() {
            $preview.remove()
        })
    }

    MultiFileUploader.DEFAULTS = {
        handler: 'onUpdateFile',
        maxSize: null,
        fileTypes: null
    }

    var old = $.fn.multiFileUploader

    $.fn.multiFileUploader = function (option) {
        return this.each(function () {
            var $this = $(this)
            var data  = $this.data('oc.multiFileUploader')
            var options = $.extend({}, MultiFileUploader.DEFAULTS, $this.data(), typeof option == 'object' && option)

            if (!data) $this.data('oc.multiFileUploader', (data = new MultiFileUploader(this, options)))
            if (typeof option == 'string') data[option].call($this)
        })
      }

    $.fn.multiFileUploader.Constructor = MultiFileUploader

    $.fn.multiFileUploader.noConflict = function () {
        $.fn.multiFileUploader = old
        return this
    }

    // ICON UPLOAD CONTROL DATA-API
    // ===============
    $(document).render(function(){
        $('[data-control=multi-file-uploader]').multiFileUploader()
    })

}(window.jQuery);