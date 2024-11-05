<!-- resources/views/partials/footer.blade.php -->

<footer class="bg-black text-light py-4 mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5 class="text-yellow-color">About us</h5>
                <p class="text-white-50">
                    Our mission is to provide the best vehicle sales and maintenance service, ensuring satisfaction and trust for our customers.</p>
            </div>

            <div class="col-md-4 mb-3">
                <h5 class="text-yellow-color">Links Rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-light">Home</a></li>
                    <li><a href="{{ route('vehicle.index') }}" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-light">Veículos</a></li>
                    <li><a href="{{ route('vehicle.create') }}" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover text-light">Adicionar Veículo</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-3">
                <h5 class="text-yellow-color">Contact</h5>
                <p class="text-white-50">Email: contact@devgarage.com</p>
                <p class="text-white-50">Phone: (11) 1234-5678</p>
            </div>
        </div>
        <hr class="text-light">
        <div class="text-center">
            <p class="m-0 text-white-50">&copy; {{ date('Y') }} Our Store. All rights reserved.</p>
        </div>
    </div>
</footer>