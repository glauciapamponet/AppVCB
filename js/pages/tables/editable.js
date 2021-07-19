var example1 = new BSTable("table1", {editableColumns:"0,1,3"});
example1.init();

// Example with a add new row button & only some columns editable & removed actions column label
var example2 = new BSTable("table2", {
  editableColumns:"0,1",
  $addButton: $('#table2-new-row-button'),
  onEdit:function() {
    console.log("EDITED");
  },
  advanced: {
    columnLabel: ''
  }
});
example2.init();
