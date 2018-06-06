<a-entity
    class="photosphere-title"
    id="photosphere-title-content-id-{{ $photosphere['title']['#content-id'] }}"
    isvr-photosphere-title-listener
    data-shown="false"
    visible="false"
    position="0 10 -2.1"
    geometry="primitive: plane; width: 1.8; height: 0.66"
    material="transparent: true; opacity: 0">
    <a-entity
        geometry="primitive: plane; width: 1.74; height: 0.6"
        position="0 0 0.01"
        material="transparent: true; opacity: 0">
        <a-entity
            geometry="primitive: plane; width: 1.6; height: 0.4"
            position="0 0 0.02"
            material="transparent: true; opacity: 0">
            <a-text
                value="{{ $photosphere['title']['#value'] }}"
                color="{{ $photosphere['text-color']['#value'] }}"
                anchor="center"
                width="1.6">
            </a-text>
            <!-- capture mouseover / mouseout events; enables smooth cursor animation //-->
            <a-entity
                material="opacity: 0"
                geometry="primitive: plane; width: 1.6; height: 0.4"
                position="0 0 0.04">
            </a-entity>
        </a-entity>
    </a-entity>
</a-entity>
