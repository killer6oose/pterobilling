@extends('layouts.client')

@section('content')
    <form action="" method="POST">
        @csrf

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Minecraft</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="software" value="PaperMC" checked>
                                <label class="form-check-label">PaperMC</label>
                                <select name="version" name="version" class="form-control">
                                    <option value="1.16.4">1.16.4</option>
                                    <option value="1.16.3">1.16.3</option>
                                    <option value="1.16.2">1.16.2</option>
                                    <option value="1.16.1">1.16.1</option>
                                    <option value="1.16.0">1.16.0</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="software" value="Vanilla">
                                <label class="form-check-label">Vanilla</label>
                                <select name="version" class="form-control">
                                    <option value="1.16.4">1.16.4</option>
                                    <option value="1.16.3">1.16.3</option>
                                    <option value="1.16.2">1.16.2</option>
                                    <option value="1.16.1">1.16.1</option>
                                    <option value="1.16.0">1.16.0</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="software" value="Bungeecord">
                                <label class="form-check-label">Bungeecord</label>
                                <select name="version" class="form-control">
                                    <option value="1.16">1.16</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Minecraft</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="software" value="PaperMC">
                                <label class="form-check-label">PaperMC</label>
                                <select name="version" class="form-control">
                                    <option value="1.16.4">1.16.4</option>
                                    <option value="1.16.3">1.16.3</option>
                                    <option value="1.16.2">1.16.2</option>
                                    <option value="1.16.1">1.16.1</option>
                                    <option value="1.16.0">1.16.0</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="software" value="Vanilla">
                                <label class="form-check-label">Vanilla</label>
                                <select name="version" class="form-control">
                                    <option value="1.16.4">1.16.4</option>
                                    <option value="1.16.3">1.16.3</option>
                                    <option value="1.16.2">1.16.2</option>
                                    <option value="1.16.1">1.16.1</option>
                                    <option value="1.16.0">1.16.0</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="software" value="Bungeecord">
                                <label class="form-check-label">Bungeecord</label>
                                <select name="version" class="form-control">
                                    <option value="1.16">1.16</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 row justify-content-center mb-2">
                <button type="submit" class="btn btn-primary">
                    Install Software <i class="fa fa-download"></i>
                </button>
            </div>
        </div>
    </form>
@endsection