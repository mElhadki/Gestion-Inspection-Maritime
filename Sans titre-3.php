<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="text-center">Inspection View <span class="fa fa-edit pull-right bigicon"></span></h4>
        </div>
        <div class="panel-body text-center">
            <div id="grid"></div>
        </div>
    </div>
</div>

<!-- you need to include the shieldui css and js assets in order for the grids to work -->
<link rel="stylesheet" type="text/css" href="https://www.prepbootstrap.com/Content/shieldui-lite/dist/css/light/all.min.css" />
<script type="text/javascript" src="https://www.prepbootstrap.com/Content/shieldui-lite/dist/js/shieldui-lite-all.min.js"></script>

<script type="text/javascript" src="https://www.prepbootstrap.com/Content/data/shortGridData.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#grid").shieldGrid({
            dataSource: {
                data: gridData,
                schema: {
                    fields: {
                        id: { path: "id", type: Number },
                        age: { path: "age", type: Number },
                        name: { path: "name", type: String },
                        company: { path: "company", type: String },
                        month: { path: "month", type: Date },
                        isActive: { path: "isActive", type: Boolean },
                        email: { path: "email", type: String },
                        transport: { path: "transport", type: String }
                    }
                }
            },
            sorting: {
                multiple: true
            },
            rowHover: false,
            columns: [
                { field: "name", title: "Person Name", width: "120px" },
                { field: "age", title: "Age", width: "80px" },
                { field: "company", title: "Company Name" },
                { field: "month", title: "Date of Birth", format: "{0:MM/dd/yyyy}", width: "120px" },
                { field: "isActive", title: "Active" },
                { field: "email", title: "Email Address", width: "250px" },
                { field: "transport", title: "Custom Editor", width: "120px", editor: myCustomEditor },
                {
                    width: "104px",
                    title: "Delete Column",
                    buttons: [
                        { cls: "deleteButton", commandName: "delete", caption: "<img src='http://www.prepbootstrap.com/Content/images/template/BootstrapEditableGrid/delete.png' /><span>Delete</span>" }
                    ]
                }
            ],
            editing: {
                enabled: true,
                event: "click",
                type: "cell",
                confirmation: {
                    "delete": {
                        enabled: true,
                        template: function (item) {
                            return "Delete row with ID = " + item.id
                        }
                    }
                }
            },
            events:
            {
                getCustomEditorValue: function (e) {
                    e.value = $("#dropdown").swidget().value();
                    $("#dropdown").swidget().destroy();
                }
            }
        });

        function myCustomEditor(cell, item) {
            $('<div id="dropdown"/>')
                .appendTo(cell)
                .shieldDropDown({
                    dataSource: {
                        data: ["motorbike", "car", "truck"]
                    },
                    value: !item["transport"] ? null : item["transport"].toString()
                }).swidget().focus();
        }
    });
</script>

<style type="text/css">
    .sui-button-cell
    {
        text-align: center;
    }

    .sui-checkbox
    {
        font-size: 17px !important;
        padding-bottom: 4px !important;
    }

    .deleteButton img
    {
        margin-right: 3px;
        vertical-align: bottom;
    }

    .bigicon
    {
        color: #5CB85C;
        font-size: 20px;
    }
</style>
<body>
        <table id="fresh-table" class="table">
            <thead>
                <th data-field="id">ID</th>
            	<th data-field="name">Name</th>
            	<th data-field="salary">Salary</th>
            	<th data-field="country">Country</th>
            	<th data-field="city">City</th>
            	<th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
            </thead>
            <tbody>
                <tr>
                	<td>1</td>
                	<td>Dakota Rice</td>
                	<td>$36,738</td>
                	<td>Niger</td>
                	<td>Oud-Turnhout</td>
                	<td></td>
                </tr>
                <tr>
                	<td>2</td>
                	<td>Minerva Hooper</td>
                	<td>$23,789</td>
                	<td>Curaçao</td>
                	<td>Sinaai-Waas</td>
                	<td></td>
                </tr>
                <tr>
                	<td>3</td>
                	<td>Sage Rodriguez</td>
                	<td>$56,142</td>
                	<td>Netherlands</td>
                	<td>Baileux</td>
                	<td></td>
                </tr>
                <tr>
                	<td>4</td>
                	<td>Philip Chaney</td>
                	<td>$38,735</td>
                	<td>Korea, South</td>
                	<td>Overland Park</td>
                	<td></td>
                </tr>
                <tr>
                	<td>5</td>
                	<td>Doris Greene</td>
                	<td>$63,542</td>
                	<td>Malawi</td>
                	<td>Feldkirchen in Kärnten</td>
                	<td></td>
                </tr>
                <tr>
                	<td>6</td>
                	<td>Mason Porter</td>
                	<td>$78,615</td>
                	<td>Chile</td>
                	<td>Gloucester</td>
                	<td></td>
                </tr>
                <tr>
                	<td>7</td>
                	<td>Alden Chen</td>
                	<td>$63,929</td>
                	<td>Finland</td>
                	<td>Gary</td>
                	<td></td>
                </tr>
                <tr>
                	<td>8</td>
                	<td>Colton Hodges</td>
                	<td>$93,961</td>
                	<td>Nicaragua</td>
                	<td>Delft</td>
                	<td></td>
                </tr>
                <tr>
                	<td>9</td>
                	<td>Illana Nelson</td>
                	<td>$56,142</td>
                	<td>Heard Island</td>
                	<td>Montone</td>
                	<td></td>
                </tr>
                <tr>
                	<td>10</td>
                	<td>Nicole Lane</td>
                	<td>$93,148</td>
                	<td>Cayman Islands</td>
                	<td>Cottbus</td>
                	<td></td>
                </tr>
                <tr>
                	<td>11</td>
                	<td>Chaim Saunders</td>
                	<td>$5,502</td>
                	<td>Romania</td>
                	<td>New Quay</td>
                	<td></td>
                </tr>
                <tr>
                	<td>12</td>
                	<td>Josiah Simon</td>
                	<td>$50,265</td>
                	<td>Christmas Island</td>
                	<td>Sint-Jans-Molenbeek</td>
                	<td></td>
                </tr>
                <tr>
                	<td>13</td>
                	<td>Ila Poole</td>
                	<td>$67,413</td>
                	<td>Montenegro</td>
                	<td>Pontevedra</td>
                	<td></td>
                </tr>
                <tr>
                	<td>14</td>
                	<td>Shana Mejia</td>
                	<td>$58,566</td>
                	<td>Afghanistan</td>
                	<td>Ballarat</td>
                	<td></td>
                </tr>
                <tr>
                	<td>15</td>
                	<td>Lana Ryan</td>
                	<td>$64,151</td>
                	<td>Martinique</td>
                	<td>Portobuffolè</td>
                	<td></td>
                </tr>
                <tr>
                	<td>16</td>
                	<td>Daquan Bender</td>
                	<td>$91,906</td>
                	<td>Sao Tome and Principe</td>
                	<td>Walhain-Saint-Paul</td>
                	<td></td>
                </tr>
                <tr>
                	<td>17</td>
                	<td>Connor Wagner</td>
                	<td>$86,537</td>
                	<td>Germany</td>
                	<td>Solihull</td>
                	<td></td>
                </tr>
                <tr>
                	<td>18</td>
                	<td>Boris Horton</td>
                	<td>$35,094</td>
                	<td>Laos</td>
                	<td>Saint-Mard</td>
                	<td></td>
                </tr>
                <tr>
                	<td>19</td>
                	<td>Winifred Ryan</td>
                	<td>$64,436</td>
                	<td>Ireland</td>
                	<td>Ronciglione</td>
                	<td></td>
                </tr>
            </tbody>
        </table></body>