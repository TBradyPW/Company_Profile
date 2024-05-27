@extends ('layout.index_layout')

@section ('Loading_page')
    <div class="mypreloader" id="myPreloader">
        <div class="spinner" id="loadingBulat"></div>
    </div>
    <style>
        #myPreloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #dfe5ed;
            z-index: 9999;
        }

        #loadingBulat {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 50px;
        height: 50px;
        margin-top: -25px; /* Mengatur tinggi agar loading bulat berada di tengah2 layar */
        margin-left: -25px; /* Mengatur lebar agar loading bulat berada di tengah2 layar */
        border: 5px solid #146df8;
        border-radius: 50%;
        border-top-color: transparent;
        animation: spin 1s linear infinite;
        z-index: 200;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
@endsection

