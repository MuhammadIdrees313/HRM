
/*
 * ADMIN ROLES SCRIPT
 */


var roleSubModules;

/*
 *
 * @returns {unresolved}
 * Grab all selected checkbox values
 *
 */
function get_jqbox_values() {
    var items = $('#jqxTree').jqxTree('getCheckedItems');
    var temp = [];
    var checkedParentItems = new Array();
    for (var i = 0; i < items.length; i++) {
        var parentI = $('#jqxTree').jqxTree('getItem', items[i].parentElement);
        if (parentI == null) {
            checkedParentItems.push(items[i]);
        } else if (parentI && parentI.checked != true) {
            checkedParentItems.push(items[i]);
        }
        ;
    }
    ;
    var checkboxes = $('#jqxTree').jqxTree('checkboxes');
    var my_mod = [];
    $.each(checkedParentItems, function (key, value) {
        if (value.level == 0 && value.checked == true) {
            var id = value.value;
            my_mod.push(value);
            temp.push({'sub_module_id': id, 'create': 1, 'read': 1, 'update': 1, 'delete': 1});
        }
        else {
            if (value.level == 1 && value.checked == true) {
                var childParentID = $(value.parentElement).data('id');
                // Check: either id exist or not into the temp array
                var result = $.grep(temp, function (e) {
                    return e.sub_module_id == childParentID;
                });
                if (result.length == 0)
                {   // not found
                    temp.push({'sub_module_id': childParentID, 'create': 0, 'read': 0, 'update': 0, 'delete': 0});
                }
                for (var i in temp) {
                    if (temp[i].sub_module_id == childParentID) {
                        if (value.label == "Create")
                        {
                            temp[i].create = 1;
                        }
                        else if (value.label == "Read")
                        {
                            temp[i].read = 1;
                        }
                        else if (value.label == "Update")
                        {
                            temp[i].update = 1;
                        }
                        else if (value.label == "Delete")
                        {
                            temp[i].delete = 1;
                        }
                        break; //Stop this loop, we found it!
                    }
                }
            }
        }
    });// end loop here
    roleSubModules = temp;
}

// Get method for module permission
function getRoleSubModules() {
    return roleSubModules;
}










