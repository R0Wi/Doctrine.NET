using System;
using System.Reflection;
using Pchp.Core;
using Pchp.Core.Reflection;

namespace csharpapp
{
    public class Program
    {
        static void Main()
        {
            // sideload assembly containing compiled PHP code:            
           // Context.AddScriptReference(Assembly.Load(new AssemblyName("fpdf")));

            // create host for PHP code (Runtime Context):
            using (var ctx = Context.CreateConsole(null))
            {
                
            }
        }
    }
}
