<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://aframe.io/releases/1.1.0/aframe.min.js"></script>
    <script src="https://libs.zappar.com/zappar-aframe/0.3.6/zappar-aframe.js"></script>

    <title>RA de Git Hub</title>
  </head>
  <body>
    <a-scene>
      <a-entity zappar-permissions-ui id="permissions"></a-entity>

      <a-entity zappar-compatibility-ui id="compatibility"></a-entity>

      <a-camera zappar-camera></a-camera>

      <a-entity
        zappar-image="target:https://cdn.glitch.global/be8afb92-31e5-4eea-8c26-7f86a9ec9d19/marcador%20git.zpt?v=1647372512040"
      >
        <a-entity
          id="model"
          gltf-model="https://cdn.glitch.global/be8afb92-31e5-4eea-8c26-7f86a9ec9d19/octacat_adrian.glb?v=1647386135629"
        ></a-entity>
      </a-entity>
    </a-scene>
  </body>
</html>
