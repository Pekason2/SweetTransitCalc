export class Calculator {

    //<editor-fold desc="Attributes" defaultstate="collapsed">
        #ajaxPreset = "../public/index.php?class=Calculator&function=";


    //</editor-fold>

    //<editor-fold desc="Getter & Setter" defaultstate="collapsed">

    //</editor-fold>

    constructor() {
        this.fetchVariables();
        this.setVariables()
    }

    fetchVariables()
    {
        $.ajax({url: this.#ajaxPreset + "fetchVariables", success: function(result)
            {
                JSON.parse(result);

                console.log(result);
            }
        });
    }

    setVariables()
    {
        $("#facility-names").append("<option value='facility'>Facilities</option>");
    }
}