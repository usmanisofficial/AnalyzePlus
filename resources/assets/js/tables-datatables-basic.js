/**
 * DataTables Basic
 */

'use strict';

fetch('/');

let fv, offCanvasEl;
document.addEventListener('DOMContentLoaded', function (e) {
  (function () {
    const formAddNewRecord = document.getElementById('form-add-new-record');
    // Form validation for Add new record
    fv = FormValidation.formValidation(formAddNewRecord, {
      fields: {
        basicLossCategory: {
          validators: {}
        },
        basicLossReason: {
          validators: {
            notEmpty: {
              message: 'Loss Reason is required'
            }
          }
        }
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          // eleInvalidClass: '',
          eleValidClass: '',
          rowSelector: '.col-sm-12'
        }),
        submitButton: new FormValidation.plugins.SubmitButton(),
        // defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
        autoFocus: new FormValidation.plugins.AutoFocus()
      },
      init: instance => {
        instance.on('plugins.message.placed', function (e) {
          if (e.element.parentElement.classList.contains('input-group')) {
            e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
          }
        });
      }
    });

    // FlatPickr Initialization & Validation
    const flatpickrDate = document.querySelector('[name="basicDate"]');

    if (flatpickrDate) {
      flatpickrDate.flatpickr({
        enableTime: false,
        // See https://flatpickr.js.org/formatting/
        dateFormat: 'm/d/Y',
        // After selecting a date, we need to revalidate the field
        onChange: function () {
          fv.revalidateField('basicDate');
        }
      });
    }
  })();
});

// datatable (jquery)
$(function () {
  var dt_basic_table = $('.datatables-basic'),
    dt_basic;

  // DataTable with buttons
  // --------------------------------------------------------------------

  if (dt_basic_table.length) {
    dt_basic = dt_basic_table.DataTable({
      ajax: assetsPath + 'json/table-datatable.json',
      columns: [
        { data: '' },
        { data: 'id' },
        { data: 'id' },
        { data: 'stop_id' },
        { data: 'start_time' },
        { data: 'end_time' },
        { data: 'machine_name' },
        { data: 'loss_category' },
        { data: 'time_lost' },
        { data: 'loss_reason' },
        { data: '' }
      ],
      columnDefs: [
        {
          // For Responsive
          className: 'control',
          orderable: false,
          searchable: false,
          responsivePriority: 2,
          targets: 0,
          render: function (data, type, full, meta) {
            return '';
          }
        },
        {
          // For Checkboxes
          targets: 1,
          orderable: false,
          searchable: false,
          responsivePriority: 3,
          checkboxes: true,
          render: function () {
            return '<input type="checkbox" class="dt-checkboxes form-check-input">';
          },
          checkboxes: {
            selectAllRender: '<input type="checkbox" class="form-check-input">'
          }
        },
        {
          targets: 2,
          searchable: false,
          visible: false
        },
        {
          // Avatar image/badge, Name and post
          targets: 3,
          responsivePriority: 4,
          render: function (data, type, full, meta) {
            var $name = full['stop_id'];

            // Creates full output for row
            var $row_output =
              '<div class="d-flex justify-content-start align-items-center user-name">' +
              '<div class="d-flex flex-column">' +
              '<span class="emp_name text-truncate">' +
              $name +
              '</span>' +
              '</div>' +
              '</div>';
            return $row_output;
          }
        },
        {
          responsivePriority: 1,
          targets: 4,
          render: function (data, type, full, meta) {
            return full['start_time'];
          }
        },
        {
          targets: 5,
          render: function (data, type, full, meta) {
            return full['end_time'];
          }
        },
        {
          targets: 6,
          render: function (data, type, full, meta) {
            return full['machine_name'];
          }
        },

        {
          // Label
          targets: 7,
          render: function (data, type, full, meta) {
            var $loss_category_number = full['loss_category'];
            var $loss_category = {
              1: { title: 'Minor Stop', class: 'bg-label-primary' },
              2: { title: 'Planned Stop', class: ' bg-label-success' },
              3: { title: 'Unplanned Stop', class: ' bg-label-danger' },
              4: { title: 'Emergency', class: ' bg-label-warning' }
            };
            if (typeof $loss_category[$loss_category_number] === 'undefined') {
              return 'Please Specify a loss category: 1 - 4 (Minor Stop, Planned Stop, Unplanned Stop, Emergency)';
            }
            return (
              '<span class="badge ' +
              $loss_category[$loss_category_number].class +
              '">' +
              $loss_category[$loss_category_number].title +
              '</span>'
            );
          }
        },
        {
          targets: 9,
          render: function (data, type, full, meta) {
            return full['time_lost'];
          }
        },
        {
          target: 8,
          render: function (data, type, full, meta) {
            return full['loss_reason'];
          }
        },
        {
          // Actions
          targets: 10,
          title: 'Actions',
          orderable: false,
          searchable: false,
          render: function (data, type, full, meta) {
            return '<a href="javascript:;" class="btn btn-sm btn-icon"><i class="text-primary ti ti-pencil open-add-new-record"></i></a>';
          }
        }
      ],
      order: [[2, 'desc']],
      dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-3 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      displayLength: 10,
      lengthMenu: [7, 10, 25, 50, 75, 100],
      buttons: [
        {
          extend: 'collection',
          className: 'btn btn-label-primary dropdown-toggle me-2 waves-effect waves-light',
          text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
          buttons: [
            {
              extend: 'print',
              text: '<i class="ti ti-printer me-1" ></i>Print',
              className: 'dropdown-item',
              exportOptions: {
                columns: [3, 4, 5, 6, 7],
                // prevent avatar to be display
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('user-name')) {
                        result = result + item.lastChild.firstChild.textContent;
                      } else if (item.innerText === undefined) {
                        result = result + item.textContent;
                      } else result = result + item.innerText;
                    });
                    return result;
                  }
                }
              },
              customize: function (win) {
                //customize print view for dark
                $(win.document.body)
                  .css('color', config.colors.headingColor)
                  .css('border-color', config.colors.borderColor)
                  .css('background-color', config.colors.bodyBg);
                $(win.document.body)
                  .find('table')
                  .addClass('compact')
                  .css('color', 'inherit')
                  .css('border-color', 'inherit')
                  .css('background-color', 'inherit');
              }
            },
            {
              extend: 'pdf',
              text: '<i class="ti ti-file-description me-1"></i>Pdf',
              className: 'dropdown-item',
              exportOptions: {
                columns: [3, 4, 5, 6, 7],
                // prevent avatar to be display
                format: {
                  body: function (inner, coldex, rowdex) {
                    if (inner.length <= 0) return inner;
                    var el = $.parseHTML(inner);
                    var result = '';
                    $.each(el, function (index, item) {
                      if (item.classList !== undefined && item.classList.contains('user-name')) {
                        result = result + item.lastChild.firstChild.textContent;
                      } else if (item.innerText === undefined) {
                        result = result + item.textContent;
                      } else result = result + item.innerText;
                    });
                    return result;
                  }
                }
              }
            }
          ]
        }
      ],
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['stop_id'];
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                ? '<tr data-dt-row="' +
                    col.rowIndex +
                    '" data-dt-column="' +
                    col.columnIndex +
                    '">' +
                    '<td>' +
                    col.title +
                    ':' +
                    '</td> ' +
                    '<td>' +
                    col.data +
                    '</td>' +
                    '</tr>'
                : '';
            }).join('');

            return data ? $('<table class="table"/><tbody />').append(data) : false;
          }
        }
      }
    });
    $('div.head-label').html('<h5 class="card-title mb-0">Stops</h5>');
  }

  // Delete Record
  $('.datatables-basic tbody').on('click', '.delete-record', function () {
    dt_basic.row($(this).parents('tr')).remove().draw();
  });
  // Open add new record canvas when pencil button is clicked
  $('.datatables-basic tbody').on('click', '.open-add-new-record', function () {
    offCanvasEl = new bootstrap.Offcanvas(document.querySelector('#add-new-record'));
    const row = dt_basic.row($(this).parents('tr')).data(); // Get data of the clicked row

    // Populate form fields with existing data
    $('.add-new-record .dt-stop-id').val(row.stop_id);
    $('.add-new-record .dt-category').val(row.loss_category);
    $('.add-new-record .dt-loss-reason').val(row.loss_reason);
    offCanvasEl.show();
  });

  // On form submit, if form is valid
  fv.on('core.form.valid', function () {
    var $new_stop_id = $('.add-new-record .dt-stop-id').val(),
      $new_loss_category = $('.add-new-record .dt-category').val(),
      $new_loss_reason = $('.add-new-record .dt-loss-reason').val();
    $new_start_time = $new_end_time = $new_machine_name = $new_time_lost = '';

    if ($new_stop_id != '') {
      const selectedRow = dt_basic.row('.selected').index(); // Get the index of the selected row
      dt_basic
        .row(selectedRow)
        .data({
          loss_category: $new_loss_category,
          loss_reason: $new_loss_reason
        })
        .draw();

      // Hide offcanvas using javascript method
      offCanvasEl.hide();
    }
  });
});
