## Table of contents

- [\Artistan\GitInfo\GitInfoEnv](#class-artistangitinfogitinfoenv)
- [\Artistan\GitInfo\GitInfoEnvInterface (interface)](#interface-artistangitinfogitinfoenvinterface)
- [\Artistan\GitInfo\GitInfoProvider](#class-artistangitinfogitinfoprovider)
- [\Artistan\GitInfo\GitInfoFacade](#class-artistangitinfogitinfofacade)
- [\Artistan\GitInfo\GitInfoEnvFacade](#class-artistangitinfogitinfoenvfacade)

<hr />

### Class: \Artistan\GitInfo\GitInfoEnv

> Class GitInfoEnv

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBranch()</strong> : <em>mixed</em> |
| public | <strong>getLatestTag()</strong> : <em>mixed</em> |

*This class extends \eiriksm\GitInfo\GitInfo*

*This class implements \eiriksm\GitInfo\GitInfoInterface, [\Artistan\GitInfo\GitInfoEnvInterface](#interface-artistangitinfogitinfoenvinterface)*

<hr />

### Interface: \Artistan\GitInfo\GitInfoEnvInterface

> Interface GitInfoEnvInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getBranch()</strong> : <em>string/bool A branch name string, or FALSE if there was a problem.</em><br /><em>Gets the current branch name</em> |
| public | <strong>getLatestTag()</strong> : <em>string/bool A tag name string, or FALSE if there was a problem.</em><br /><em>Gets the most recent tag for the repository</em> |

*This class implements \eiriksm\GitInfo\GitInfoInterface*

<hr />

### Class: \Artistan\GitInfo\GitInfoProvider

> Class GitInfoProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>boot()</strong> : <em>void</em><br /><em>Alias the services in the boot.</em> |
| public | <strong>register()</strong> : <em>void</em><br /><em>Register the services.</em> |

*This class extends \Illuminate\Support\ServiceProvider*

<hr />

### Class: \Artistan\GitInfo\GitInfoFacade

| Visibility | Function |
|:-----------|:---------|
| protected static | <strong>getFacadeAccessor()</strong> : <em>mixed</em> |

*This class extends \Illuminate\Support\Facades\Facade*

<hr />

### Class: \Artistan\GitInfo\GitInfoEnvFacade

| Visibility | Function |
|:-----------|:---------|
| protected static | <strong>getFacadeAccessor()</strong> : <em>mixed</em> |

*This class extends \Illuminate\Support\Facades\Facade*

