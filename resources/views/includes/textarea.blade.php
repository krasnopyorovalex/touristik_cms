<div class="form-group">
    <label for="editor-full">{{ $label }}:</label>
    <textarea class="form-control border-blue border-xs" id="{{ isset($id) ? $id : 'editor-full' }}" name="{{ $name }}">{{ old( $name, isset($entity) ? $entity->{$name} : '') }}</textarea>
</div>