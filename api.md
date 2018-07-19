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
| public | <strong>__construct(</strong><em>string</em> <strong>$git_command=`'git'`</strong>)</strong> : <em>void</em><br /><em>Constructor.</em> |
| public | <strong>buildPath(</strong><em>mixed</em> <strong>$repo</strong>, <em>mixed</em> <strong>$branch</strong>, <em>mixed</em> <strong>$tag</strong>, <em>mixed</em> <strong>$path</strong>)</strong> : <em>void</em> |
| public | <strong>getBranch()</strong> : <em>mixed</em> |
| public | <strong>getConfigs(</strong><em>mixed</em> <strong>$path=null</strong>, <em>mixed</em> <strong>$repo=null</strong>, <em>mixed</em> <strong>$branch=null</strong>, <em>mixed</em> <strong>$tag=null</strong>, <em>string</em> <strong>$tabFailOver=`'default'`</strong>)</strong> : <em>mixed</em> |
| public | <strong>getLatestTag()</strong> : <em>mixed</em> |
| public | <strong>getRepo()</strong> : <em>mixed</em> |
| protected | <strong>simpleExecAndTrim(</strong><em>string</em> <strong>$command</strong>)</strong> : <em>string/bool The output string, or FALSE if things went badly.</em><br /><em>Helper to make sure we trim the output. The command to run.</em> |

*This class extends \eiriksm\GitInfo\GitInfo*

*This class implements \eiriksm\GitInfo\GitInfoInterface, [\Artistan\GitInfo\GitInfoEnvInterface](#interface-artistangitinfogitinfoenvinterface)*

<hr />

### Interface: \Artistan\GitInfo\GitInfoEnvInterface

> Interface GitInfoEnvInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>buildPath(</strong><em>mixed</em> <strong>$repo</strong>, <em>mixed</em> <strong>$branch</strong>, <em>mixed</em> <strong>$tag</strong>, <em>mixed</em> <strong>$path</strong>)</strong> : <em>string</em><br /><em>build the $path with replacements based on passed params - [TAG] is replaced with $tag - [BRANCH] is replaced with $branch - [REPO] is replaced with $repo</em> |
| public | <strong>getBranch()</strong> : <em>string/bool A branch name string, or FALSE if there was a problem.</em><br /><em>Gets the current branch name</em> |
| public | <strong>getConfigs(</strong><em>string/null</em> <strong>$path=null</strong>, <em>string/null</em> <strong>$repo=null</strong>, <em>string/null</em> <strong>$branch=null</strong>, <em>string/null</em> <strong>$tag=null</strong>, <em>string</em> <strong>$tabFailOver=`'default'`</strong>)</strong> : <em>array</em><br /><em>Gets the configs based on passed data if $tag IS NULL then use $tabFailOver else if $tabFailOver IS NULL then use $branch if you want to use blank as the tag default use $tabFailOver='' (empty string)</em> |
| public | <strong>getLatestTag()</strong> : <em>string/bool A tag name string, or FALSE if there was a problem.</em><br /><em>Gets the most recent tag for the repository</em> |
| public | <strong>getRepo()</strong> : <em>string/bool A repo name string, or FALSE if there was a problem.</em><br /><em>Gets the current repo name</em> |

*This class implements \eiriksm\GitInfo\GitInfoInterface*

<hr />

### Class: \Artistan\GitInfo\GitInfoProvider

> Class GitInfoProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>boot()</strong> : <em>void</em><br /><em>Alias the services in the boot.</em> |
| public | <strong>register()</strong> : <em>void</em><br /><em>Register the services. also need to override configs before all Providers are loaded so they have the data needed!</em> |

*This class extends \Illuminate\Support\ServiceProvider*

<hr />

### Class: \Artistan\GitInfo\GitInfoFacade

> Class GitInfoFacade

| Visibility | Function |
|:-----------|:---------|
| protected static | <strong>getFacadeAccessor()</strong> : <em>string</em> |

*This class extends \Illuminate\Support\Facades\Facade*

<hr />

### Class: \Artistan\GitInfo\GitInfoEnvFacade

> Class GitInfoEnvFacade

| Visibility | Function |
|:-----------|:---------|
| protected static | <strong>getFacadeAccessor()</strong> : <em>string</em> |

*This class extends \Illuminate\Support\Facades\Facade*

