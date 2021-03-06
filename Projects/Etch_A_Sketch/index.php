
    <head>
        <script type="text/javascript">
            window.onload = function() {
                let size = document.getElementById('refreshNum').value;

                const btn = document.getElementById('refresh');

                btn.addEventListener('click', () => {
                    let size = document.getElementById('refreshNum').value;
                    makeGrid(size);
                });


                const makeGrid = function(size) {

                    const body = document.body;
                    const divOut = document.getElementById('outDiv')

                    divOut.innerHTML = "";

                    const inWidth = 500 / size;
                    const inHeight = 500 / size;


                    divOut.className = 'outDiv';
                    divOut.style.cssText = 'grid-template-columns: repeat(' + size + ', auto)';

                    for (let j = 0; j < size * size; j++) {
                        let divIn = document.createElement('div');
                        divIn.className = 'inDiv';
                        divIn.style.width = inWidth;
                        divIn.style.height = inHeight;
                        divIn.addEventListener('mouseover', () => {
                            divIn.style.background = 'black';
                        });
                        divOut.appendChild(divIn);
                    }
                }

                makeGrid(size);
            }

        </script>
        <style>

            #outDiv {
                display: grid;
                background-color: #6699CC;
                text-align: center;
                width: 640;
                height: 640;
                margin: 0 auto;
                border-top: 50px solid #FF3C38;
                border-bottom: 150px solid #FF3C38;
                border-right: 50px solid #FF3C38;
                border-left: 50px solid #FF3C38;
                margin-top: 20px;
            }

            .inDiv {
                background-color: #6699CC;
                font-size: 10px;
                text-align: center;
            }

            #inputDiv {
                text-align: center;
            }

            button {
                background-color: #FF8C42;
            }

        </style>
    </head>

    <body>
        
        <div id='inputDiv'>
            <input type="text" id="refreshNum" value=64>
            <button id="refresh">Refresh</button>
        </div>
        <div id="outDiv">

        </div>

    </body>

