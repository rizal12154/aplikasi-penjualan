@include('layouts.style')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Extended Modals</h5>
        <div class="card-body">
            <div class="row gy-3">

                <!-- Transparent Modal -->
                <div class="col-lg-4 col-md-6">
                    <small class="text-light fw-medium">Transparent Modal</small>
                    <div class="mt-4">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modals-transparent">Show</button>

                        <!-- Modal template -->
                        <div class="modal modal-transparent fade" id="modals-transparent" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <a href="javascript:void(0);" class="btn-close text-white"
                                            data-bs-dismiss="modal" aria-label="Close"></a>
                                        <p class="text-white text-large fw-light mb-4">Subscribe to get latest updates
                                        </p>
                                        <div class="input-group input-group-lg mb-4">
                                            <input type="text" class="form-control bg-white border-0"
                                                placeholder="Your email" aria-describedby="subscribe">
                                            <button class="btn btn-primary" type="button"
                                                id="subscribe">Subscribe</button>
                                        </div>
                                        <div class="text-start text-white">We won't share your email address</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.script')
