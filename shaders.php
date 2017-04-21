<div id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 abstract">
                <h1>Shaders</h1>
                <p>Shaders are efficient graphical filters that can greatly improve the rendering of old games.</p>
                <p>They can also be used to replicate the look and feel of old CRT monitors.</p>
                <p>You can even stack them to create your own effect. The possibilities are infinite.</p>
            </div>
        </div>
    </div>
</div>

<div class="doc">
    <div class="container">
        <h2>Shaders, shader types and shader presets</h2>
        <p>A shader is a graphical filter that is applied to the game screen. You can use them to improve the aspect of old games and make them look smooth on recent monitors. They can also be used to replicate the old CRT monitors, or the screen of a gameboy.</p>

        <p>Here are a few shader examples:</p>

        <div class="row imagegrid">
            <div class="col-md-4"><img src="images/shader-ex-1.png"></div>
            <div class="col-md-4"><img src="images/shader-ex-2.png"></div>
            <div class="col-md-4"><img src="images/shader-ex-3.png"></div>
            <div class="col-md-4"><img src="images/shader-ex-4.png"></div>
            <div class="col-md-4"><img src="images/shader-ex-5.png"></div>
            <div class="col-md-4"><img src="images/shader-ex-6.png"></div>
        </div>

        <p>Shaders are small programs, and they are written in specific programming languages. RetroArch supports 3 of these languages:</p>
        <ul>
            <li><b>CG:</b> the prefered format, when available on your platform</li>
            <li><b>GLSL:</b> these shaders are working on a wide range of platforms including phones and tablets</li>
            <li><b>Slang:</b> shaders compatible with the new Vulkan renderer</li>
        </ul>
        <p>Depending on your platform and the way you have configured RetroArch, you need to use one of these shader types.</p>
        <p>RetroArch is also able to stack these shaders to create a combined effect. These complex effects are saved with a special extension:</p>
        <ul>
            <li>.cpg for CG</li>
            <li>.glslp for GLSL</li>
            <li>.slangp for Slang</li>
        </ul>

        <p>The shader presets can also have parameters. This means that you can tweak them to fit your needs.</p>

        <h2>Downloading and upgrading shaders</h2>
        <p>You can download or upgrade the shader packs for the 3 types in <b>Main Menu->Online Updater</b>.</p>

        <h2>Loading a shader preset</h2>

        <div class="row">
            <div class="col-md-6">
                <video width="100%" controls>
                    <source src="videos/load-shader.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video> 
            </div>
            <div class="col-md-6">
                <p>To enable a shader preset, you need to have a game&nbsp;running.</p>
                <p>You then trigger the menu and you should see a Shaders entry in the <b>Quick&nbsp;Menu</b>.</p>
                <p>Go to <b>Load Shader Preset</b> and choose a preset&nbsp;file.</p>
                <p>In this example, we have loaded <b>shaders_glsl/xbrz/4xbrz-linear.glslp</b>.</p>
            </div>
        </div>

        <h2>Configuring a shader</h2>
    </div>
</div>